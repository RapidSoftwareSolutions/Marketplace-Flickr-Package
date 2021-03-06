<?php

$app->post('/api/Flickr/placesForUserByWoeId', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','apiSecret','accessToken','accessSecret','woeId']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['apiKey'=>'api_key','apiSecret'=>'api_secret','accessToken'=>'oauth_token','accessSecret'=>'oauth_secret','woeId'=>'woe_id'];
    $optionalParams = ['placeTypeId'=>'place_type_id','placeType'=>'place_type','threshold'=>'threshold','minUploadDate'=>'min_upload_date','maxUploadDate'=>'max_upload_date','minTakenDate'=>'min_taken_date','maxTakenDate'=>'max_taken_date'];
    $bodyParams = [
       'query' => ['max_taken_date','min_taken_date','max_upload_date','min_upload_date','threshold','place_type','place_type_id','woe_id','method','format','api_key','oauth_token','oauth_secret','api_secret','nojsoncallback']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    
    if(isset($data['min_upload_date'])) { $data['min_upload_date'] = \Models\Params::toFormat($data['min_upload_date'], 'Y-m-d'); }
    if(isset($data['max_upload_date'])) { $data['max_upload_date'] = \Models\Params::toFormat($data['max_upload_date'], 'Y-m-d'); }
    if(isset($data['min_taken_date'])) { $data['min_taken_date'] = \Models\Params::toFormat($data['min_taken_date'], 'Y-m-d'); }
    if(isset($data['max_taken_date'])) { $data['max_taken_date'] = \Models\Params::toFormat($data['max_taken_date'], 'Y-m-d'); }

    $stack = GuzzleHttp\HandlerStack::create();    $middleware = new GuzzleHttp\Subscriber\Oauth\Oauth1([        'consumer_key'    => $data['api_key'],        'consumer_secret' => $data['api_secret'],        'token'           => $data['oauth_token'],        'token_secret'    => $data['oauth_secret']    ]);    $stack->push($middleware);    $client = new \GuzzleHttp\Client([        'handler' => $stack,        'auth' => 'oauth'    ]);
    $query_str = "https://api.flickr.com/services/rest/";

    $data['method'] = 'flickr.places.placesForUser';
$data['format'] = 'json';    $data['nojsoncallback'] = 1;

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = ["apikey"=>"{$data['apiKey']}"];
     

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