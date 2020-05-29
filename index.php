<?php

require_once './src/Router.php';
require_once './src/View.php';

$routes = require 'routes.php';

$uri = $_SERVER['REQUEST_URI'];

if (!empty($routes)) Router::load($routes)::to($uri);
