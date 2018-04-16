<?php

$router->get('','IndexController@index');
$router->get('about','IndexController@about');
$router->get('about/culture','IndexController@about-culture');
$router->get('contact','IndexController@contact');