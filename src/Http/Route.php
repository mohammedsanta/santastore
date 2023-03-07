<?php
namespace Santa\Http;

use Santa\Http\Request;
use Santa\Http\Response;
use App\Controllers\AuthController;
use App\Controllers\AccessabilityController;

class Route
{

    public static $routes = [];
    public Request $request;
    public Response $response;


    public function __construct($request,$response)
    {
        $this->request = new Request;
        $this->response = new Response;
    }


    public static function get($route,$action)
    {
        static::$routes['get'][$route] = $action;
    }

    public static function post($route,$action)
    {
        static::$routes['post'][$route] = $action;
    }


    public function dispatch()
    {

        $params = null;

        $path = $this->request->path();

        // $params = explode('/',$path);
        // $params = end($params);
        // array_shift($params);

        // $path = '/'.$path[0].'/'.$path[1];

        $params = explode('/',$path);
        if(is_numeric(end($params))){
            $params = end($params);

            $path = explode('/',$path);
            array_shift($path);
    
            $path = '/'.$path[0].'/'.$path[1];

        }

        $method = $this->request->method();
        $action = static::$routes[$method][$path] ?? false;

        AuthController::auth();
        
        // AccessabilityController::access();

        if(is_callable($action)){
            call_user_func($action);
        }

        if(is_array($action)){
            call_user_func_array([new $action[0],$action[1]],[$params]);
        }

    }
    
}