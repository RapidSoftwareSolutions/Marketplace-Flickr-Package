<?php

$app->post('/api/Flickr/uploadPhoto', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','apiSecret','accessToken','accessSecret','photoUrl']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['apiKey'=>'api_key','apiSecret'=>'api_secret','accessToken'=>'oauth_token','accessSecret'=>'oauth_secret','photoUrl'=>'photo_url'];
    $optionalParams = ['title'=>'title','description'=>'description','tags'=>'tags','isPublic'=>'is_public','isFriend'=>'is_friend','isFamily'=>'is_family','safetyLevel'=>'safety_level','contentType'=>'content_type','hidden'=>'hidden'];
    $bodyParams = [
        'query' => ['oauth_token','oauth_secret','api_secret','api_key','method','format','nojsoncallback','title','description','tags','safety_level','content_type','hidden','is_family','is_friend','is_public']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);


    if(isset($data['tags'])) { $data['tags'] = \Models\Params::toString($data['tags'], ','); }

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
    $query_str = "https://up.flickr.com/services/upload/";

    $data['format'] = 'json';
    $data['nojsoncallback'] = '1';

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = [];
    $requestParams['multipart'] = [
        [
            'name'     => 'photo',
            'contents' => fopen($data['photo_url'], 'r')
        ]
    ];


    try {
        $resp = $client->post($query_str, $requestParams);
        $responseBody = $resp->getBody()->getContents();

        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
            $result['callback'] = 'success';
            libxml_use_internal_errors(true);
            $responseBody =  simplexml_load_string($responseBody);
            if($responseBody)
            {
                $responseBody = json_decode(json_encode((array) $responseBody), 1);
            }
            $result['contextWrites']['to']['results'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
            if(empty($result['contextWrites']['to']['results'])) {
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
