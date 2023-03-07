<?php
namespace App\Controllers;

class AccessabilityController
{

    public static $privilege;

    public static $access = [

        'admin' => [
            '/customers',
            '/customers/',
            '/meets',
            '/meets',
            '/meets',
            '/meets',
            '/meets',
            '/meets',
        ]

    ];

    public static function access()
    {
        
        // static::$privilege = profile('privilege') ?? '';

        // if(!array_key_exists(static::$privilege,static::$access) &&  $_SERVER['REQUEST_URI'] != '/accessdenied'){
        //     header('Location:' . '/accessdenied');            
        // }

        // if(!in_array($_SERVER['REQUEST_URI'],static::$access[profile('privilege')])){
        //     // dump($_SERVER['REQUEST_URI']);

        //     dump(request()->path());
        // }


    }

}