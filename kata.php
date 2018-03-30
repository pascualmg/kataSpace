<?php
/**
 * Created by PhpStorm.
 * User: Pascual
 * Date: 30/03/2018
 * Time: 11:12
 */

use pascualmg\ApiGator;

require 'vendor/autoload.php';
$uri_humans_in_space = "http://api.open-notify.org/astros.json";

echo (new ApiGator())
    ->setUri($uri_humans_in_space)
    ->getArrayResponse();

