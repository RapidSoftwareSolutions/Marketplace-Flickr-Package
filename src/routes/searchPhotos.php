<?php

$app->post('/api/Flickr/searchPhotos', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['apiKey'=>'api_key'];
    $optionalParams = ['lat'=>'lat','lon' => 'lon','userId'=>'user_id','tags'=>'tags','tagMode'=>'tag_mode','text'=>'text','minUploadDate'=>'min_upload_date','maxUploadDate'=>'max_upload_date','minTakenDate'=>'min_taken_date','maxTakenDate'=>'max_taken_date','license'=>'license','sort'=>'sort','privacyFilter'=>'privacy_filter','bbox'=>'bbox','accuracy'=>'accuracy','safeSearch'=>'safe_search','contentType'=>'content_type','machineTags'=>'machine_tags','machineTagMode'=>'machine_tag_mode','groupId'=>'group_id','contacts'=>'contacts','woeId'=>'woe_id','placeId'=>'place_id','media'=>'media','hasGeo'=>'has_geo','geoContext'=>'geo_context','coordinates'=>'coordinates','radiusUnits'=>'radius_units','isCommons'=>'is_commons','inGallery'=>'in_gallery','isGetty'=>'is_getty','radius'=>'radius','extras'=>'extras','perPage'=>'per_page','page'=>'page'];
    $bodyParams = [
       'query' => ['lat','lon','api_key','method','format','nojsoncallback','coordinates','min_upload_date','max_upload_date','min_taken_date','max_taken_date','privacy_filter','media','user_id','tags','tag_mode','text','license','sort','privacy_filter','bbox','accuracy','safe_search','content_type','machine_tags','machine_tag_mode','group_id','contacts','woe_id','place_id','media','has_geo','geo_context','radius','radius_units','is_commons','in_gallery','is_getty','extras','page','per_page']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    
    if(isset($data['tags'])) { $data['tags'] = \Models\Params::toString($data['tags'], ','); }
    if(isset($data['min_upload_date'])) { $data['min_upload_date'] = \Models\Params::toFormat($data['min_upload_date'], 'unixtime'); }
    if(isset($data['max_upload_date'])) { $data['max_upload_date'] = \Models\Params::toFormat($data['max_upload_date'], 'unixtime'); }
    if(isset($data['min_taken_date'])) { $data['min_taken_date'] = \Models\Params::toFormat($data['min_taken_date'], 'unixtime'); }
    if(isset($data['max_taken_date'])) { $data['max_taken_date'] = \Models\Params::toFormat($data['max_taken_date'], 'unixtime'); }
    if(isset($data['extras'])) { $data['extras'] = \Models\Params::toString($data['extras'], ','); }
    
    if(!empty($data['coordinates']))
    {
        $part = explode(',',$data['coordinates']);
        if(!empty($part[0]) && !empty($part[1]))
        {
            $data['lat'] = trim($part[0]);
            $data['lon'] = trim($part[1]);
            unset($data['coordinates']);
        }
    }



    $client = $this->httpClient;
    $query_str = "https://api.flickr.com/services/rest";

    $data['method'] = 'flickr.photos.search';
$data['format'] = 'json';
$data['nojsoncallback'] = '1';

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = [];
     
//    print_r($requestParams);
//    exit();
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