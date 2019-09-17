<?php

use Framework\Http\Request;

$name = $_GET['name'] ?? 'Guest';

chdir(dirname(__DIR__));
require_once "vendor/autoload.php";

$request = new Request();

$name = $request->getQueryParams()['name'] ?? 'Guest';
echo "Hello, $name!";
