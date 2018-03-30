<?php
/**
 * Created by PhpStorm.
 * User: Pascual
 * Date: 30/03/2018
 * Time: 11:12
 */


require 'vendor/autoload.php';
$uri_humans_in_space = "http://api.open-notify.org/astros.json";

var_export(
    ((new ApiGator())
    ->setUri($uri_humans_in_space)
    ->getArrayResponse())['number']
);

