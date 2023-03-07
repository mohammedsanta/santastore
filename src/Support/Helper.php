<?php

use Santa\View\View;
use Santa\Application;
use Santa\Http\Request;
use Santa\Http\Response;
use Santa\Support\passData;
use App\Models\app_history;

if(!function_exists('env')){
    function env($key,$default = null){
        return $_ENV[$key] ?? value($default);
    }
}

if(!function_exists('value')){
    function value($value){
        return ($value instanceof Closure) ? $value() : $value;
    }
}

if(!function_exists('app_path')){
    function app_path()
    {
        return dirname(__FILE__) . '/../../';
    }
}

if(!function_exists('app_view')){
    function app_view()
    {
        return app_path() . 'views/';
    }
}

if(!function_exists('app_lang')){
    function app_lang()
    {
        return app_view() . 'Language/';
    }
}

if(!function_exists('old')){
    function old($key)
    {
        if(app()->session->hasFlash('old')){
            return app()->session->getFlash('old')[$key];
        }
    }
}

if(!function_exists('request')){
    function request($key = null)
    {
        $instance = new Request;

        if($key){
            return $instance->get($key);
        }

        if(is_array($key)){
            return $instance->only($key);
        }

        return $instance;
    }
}

if(!function_exists('back')){
    function back()
    {
        return (new Response)->back();
    }
}

if(!function_exists('class_basename')){
    function class_basename($class)
    {
        $class = is_object($class) ? get_class($class) : $class;

        return basename(str_replace('\\','/',$class));
    }
}

if(!function_exists('app_config')){
    function app_config()
    {
        return app_path() . 'config/';
    }
}

if(!function_exists('View')){
    function View($view,$patams = []){
        View::make($view,$patams);
    }
}

if(!function_exists('setTableLang')){
    function setTableLang($lang){
        View::languageTable($lang);
    }
}

if(!function_exists('app')){
    function app(){
        
        static $instance = null;

        if($instance == null){
            $instance = new Application;
        }

        return $instance;

    }
}

if(!function_exists('config')){
    function config($key = null,$default = null){

        if($key == null){
            return app()->config;
        }

        if(is_array($key)){
            return app()->config->set($key);
        }

        return app()->config->get($key,$default);

    }
}

if(!function_exists('action')){
    function action($action){
        app_history::create([
            'Action'    => $action,
            'ActionDate'    => date('Y-m-d'),
            'ActionPrivileges'    => profile('Username')
        ]);
    }
}

if(!function_exists('passData')){
    function passData($data = null,$key = null){

        return new passData;

    }
}

if(!function_exists('profile')){
    function profile($key){
        return app()->session->getProfile($key);
    }
}

defined('DEFAULT_LANG') ? '' : define('DEFAULT_LANG','en');