<?php

use Framework\Http\Request;

$name = $_GET['name'] ?? 'Guest';

chdir(dirname(__DIR__));
require_once "src/Framework/Http/Request.php";



$request = new Request();

$name = $request->getQueryParams()['name'] ?? 'Guest';
echo "Hello, $name!";