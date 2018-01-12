<?php

$app->post('/api/Flickr/setPermissionsForPhoto', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','apiSecret','accessToken','accessSecret','photoId']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['apiKey'=>'api_key','apiSecret'=>'api_secret','accessToken'=>'oauth_token','accessSecret'=>'oauth_secret','photoId'=>'photo_id'];
    $optionalParams = ['isPublic'=>'is_public','isFriend'=>'is_friend','permComment'=>'perm_comment','permAddmeta'=>'perm_addmeta','isFamily'=>'is_family'];
    $bodyParams = [
       'query' => ['oauth_token','oauth_secret','api_secret','api_key','method','format','nojsoncallback','photo_id','perm_addmeta','perm_comment','is_family','is_friend','is_public']
    ];


    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);
    if($post_data['args']['isPublic'] == 0)
    {
        $data['is_public'] = 0;
    }

    if($post_data['args']['isFriend'] == 0)
    {
        $data['is_friend'] = 0;
    }

    if($post_data['args']['isFamily'] == 0)
    {
        $data['is_family'] = 0;
    }


    $stack = GuzzleHttp\HandlerStack::create();
    $middleware = new GuzzleHttp\Subscriber\Oauth\Oauth1([
        'consumer_key'    => $data['api_key'],
        'consumer_secret' => $data['api_secret'],
        'token'           => $data['oauth_token'],
        'token_secret'    => $data['oauth_secret']
    ]);
    $stack->push($middleware);
    $client = new \GuzzleHttp\Client([
        'handler' => $stack,
        'auth' => 'oauth'
    ]);
    $query_str = "https://api.flickr.com/services/rest";

    $data['method'] = 'flickr.photos.setPerms';
    $data['format'] = 'json';
    $data['nojsoncallback'] = '1';

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = [];
     

    try {
        $resp = $client->post($query_str, $requestParams);
        $responseBody = $resp->getBody()->getContents();

        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
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