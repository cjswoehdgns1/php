<?php

function getAuthCheck_businessman($data, $serviceKey) 
{

    $endPoint = 'http://api.odcloud.kr/api/nts-businessman/v1/';
    $category = 'status';
    $queryParams = '?' . urlencode('serviceKey') . '=' . $serviceKey;
    $queryParams .= '&' . urlencode('returnType') . '=' . urlencode('json');

    $apiReqPoint = $endPoint.$category.$queryParams;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiReqPoint);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "accept: application/json"));
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

?>