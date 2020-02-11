<?php


namespace EasyPhpRest\Router;


use EasyPhpRest\Request\Request;
use EasyPhpRest\Util\Constants;
use EasyPhpRest\YmlParser;

class RouteMapper
{

    public function __construct()
    {
//        $this->rounter = new Router(new Request());
        $this->parser = new YmlParser();
        $this->resolveRoutes();
    }

    private function resolveRoutes()
    {
        return $this->getRoutes();
    }

    private function getRoutes()
    {
        return $this->parser->parseFile(Constants::ROOT_DIR.'config/api_routes.yml');
    }
}