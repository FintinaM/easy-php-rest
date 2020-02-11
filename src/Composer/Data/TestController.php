<?php


namespace App\Controller;


use EasyPhpRest\Request\RequestInterface;

class TestController
{
    public function hello(string $who, RequestInterface $request)
    {
        return 'Hello '.$who;
    }
}