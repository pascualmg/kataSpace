<?php
/**
 * Created by PhpStorm.
 * User: Pascual
 * Date: 30/03/2018
 * Time: 11:12
 */


use Apigator\httpClient\ApiGator;

require 'vendor/autoload.php';
$uri_humans_in_space = "http://api.open-notify.org/astros.json";
var_export(
    ((new ApiGator())
    ->setUri($uri_humans_in_space)
    ->getArrayResponse())['number']
);
file_put_contents(
    "space.json",
(new ApiGator($uri_humans_in_space))->getCurlResponse()
);

$json = file_get_contents("space.json");
echo $json;