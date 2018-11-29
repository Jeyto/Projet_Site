<?php

// accueil site web
$route->addRoute('GET', '/', 'HomeController@index');


// interface enseignant
$route->addRoute('GET', '/classe/{code}/config', 'HomeController@config');
$route->addRoute('GET', '/classe/{code}/defi', 'HomeController@defi');

// interface enfant
$route->addRoute('GET', '/jouer/{idchildren}/{idchallenge}', 'HomeController@jouer');

// backoffice


$route->addRoute('GET', '/backoffice', 'BoController@index');

$route->addRoute('GET', '/backoffice/admins', 'AdminController@index');

$route->addRoute('GET', '/backoffice/challenges', 'ChallengeController@index');
$route->addRoute('GET', '/backoffice/challenges/add', 'ChallengeController@add');
$route->addRoute('POST', '/backoffice/challenges/save', 'ChallengeController@save');
$route->addRoute('GET', '/backoffice/challenges/edit/{id:[0-9]+}', 'ChallengeController@edit');
$route->addRoute('POST', '/backoffice/challenges/edit/{id:[0-9]+}', 'ChallengeController@update');
$route->addRoute('GET', '/backoffice/challenges/delete/{id:[0-9]+}', 'ChallengeController@delete');



$route->addRoute('GET', '/login', 'BoController@login');
$route->addRoute('POST', '/login', 'BoController@loginCheck');
$route->addRoute('GET', '/delog', 'BoController@delog');
