<?php
require_once '../vendor/autoload.php';

$router = new Router(new Request);
$router->get('/', function() {
    return <<<HTML
  <h1>Hello world</h1>
HTML;
});