<?php

$app->post('/api/Flickr/removePhotosFromPhotoset', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','apiSecret','accessToken','accessSecret','photosetId','photoIds']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['apiKey'=>'api_key','apiSecret'=>'api_secret','accessToken'=>'oauth_token','accessSecret'=>'oauth_secret','photosetId'=>'photoset_id','photoIds'=>'photo_ids'];
    $optionalParams = [];
    $bodyParams = [
       'query' => ['photo_ids','photoset_id','method','format','api_key','oauth_token','oauth_secret','api_secret','nojsoncallback']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    
    $data['photo_ids'] = \Models\Params::toString($data['photo_ids'], ','); 

    $stack = GuzzleHttp\HandlerStack::create();    $middleware = new GuzzleHttp\Subscriber\Oauth\Oauth1([        'consumer_key'    => $data['api_key'],        'consumer_secret' => $data['api_secret'],        'token'           => $data['oauth_token'],        'token_secret'    => $data['oauth_secret']    ]);    $stack->push($middleware);    $client = new \GuzzleHttp\Client([        'handler' => $stack,        'auth' => 'oauth'    ]);
    $query_str = "https://api.flickr.com/services/rest/";

    $data['method'] = 'flickr.photosets.removePhotos';
$data['format'] = 'json';    $data['nojsoncallback'] = 1;

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = ["apikey"=>"{$data['apiKey']}"];
     

    try {
        $resp = $client->post($query_str, $requestParams);
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