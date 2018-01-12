<?php

$app->post('/api/Flickr/getUserPhoto', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','userId']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['apiKey'=>'api_key','userId'=>'user_id'];
    $optionalParams = ['safeSearch'=>'safe_search','minUploadDate'=>'min_upload_date','maxUploadDate'=>'max_upload_date','minTakenDate'=>'min_taken_date','contentType'=>'content_type','privacyFilter'=>'privacy_filter','extras'=>'extras','perPage'=>'per_page','page'=>'page'];
    $bodyParams = [
       'query' => ['api_key','method','format','nojsoncallback','page','per_page','extras','privacy_filter','content_type','max_taken_date','min_taken_date','max_upload_date','min_upload_date','safe_search','user_id']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    
    if(isset($data['min_upload_date'])) { $data['min_upload_date'] = \Models\Params::toFormat($data['min_upload_date'], 'unixtime'); }
    if(isset($data['max_upload_date'])) { $data['max_upload_date'] = \Models\Params::toFormat($data['max_upload_date'], 'unixtime'); }
    if(isset($data['min_taken_date'])) { $data['min_taken_date'] = \Models\Params::toFormat($data['min_taken_date'], 'unixtime'); }
    if(isset($data['extras'])) { $data['extras'] = \Models\Params::toString($data['extras'], ','); }

    $client = $this->httpClient;
    $query_str = "https://api.flickr.com/services/rest";

    $data['method'] = 'flickr.people.getPhotos';
    $data['format'] = 'json';
    $data['nojsoncallback'] = '1';

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = [];
     

    try {
        $resp = $client->get($query_str, $requestParams);
        $responseBody = $resp->getBody()->getContents();

        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204']) && json_decode($responseBody, true)['stat'] == 'ok') {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
            if(empty($result['contextWrites']['to'])) {
                $result['contextWrites']['to']['status_msg'] = "Api return no results";
            }
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});