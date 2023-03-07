<?php
namespace Santa\Support;

class Arr
{

    public static function only($array,$key)
    {
        return array_intersect_key($array,array_flip((array) $key));
    }

    public static function except($array,$key)
    {
        return static::forget($array,$key);
    }

    public static function accessible($value)
    {
        return $value instanceof ArrayAccess || is_array($value);
    }

    public static function exists($array,$key)
    {
        if($array instanceof ArrayAccess){
            return $array->offserExists($key);
        }

        return array_key_exists($key,$array);
    }

    public static function has($array,$keys)
    {

        if($keys == ''){
            return false;
        }


        if($keys == []){
            return false;
        }

        $keys = (array) $keys;

        foreach($keys as $key){

            $subArray = $array;

            if(static::exists($subArray,$key)){
                return true;
            }
    
    
            foreach(explode('.',$key) as $segment){
                if(static::accessible($subArray) && static::exists($subArray,$segment)){
                    $subArray = $subArray[$segment];
                }else {
                    return false;
                }
            }
        }


        return true;

    }

    public static function flatten($array,$depth = INF)
    {

        $result =[];

        foreach($array as $item){

            if(!is_array($item)){
                $result[] = $item;
            }elseif($depth == 1){
                $result = array_merge($result,array_values($item));
            }else {
                $result = array_merge($result,static::flatten($item,$depth - 1));
            }
        }
        return $result;
    }

    public static function last($array,callable $callback = null,$default = null)
    {

        if(is_null($callback)){
            return empty($array) ? value($defaul) : end($array);
        }
        
        return static::first(array_reverse($array,$callback,$defaul));
    }

    public static function first($array,callable $callback = null,$defaul = null)
    {

        if(is_null($callback)){
            if(empty($array)){
                return value($defaul);
            }

            foreach($array as $item){
                return $array[$item];
            }
        }

        foreach($array as $key => $value){
            if(call_user_func($callback,$value,$key)){
                return $value;
            }
        }
        return value($default);
    }

    public static function forget(&$array,$keys)
    {

        $keys = (array) $keys;

        if(!count($keys)){
            return ;
        }

        foreach($keys as $key){

            if(static::exists($array,$key)){
                unset($array[$key]);
                continue;
            }

            $parts = explode('.',$key);

            while(count($parts) > 1){

                $part = array_shift($parts);
    
                if(isset($array[$part]) && is_array($array[$part])){
                    $array = &$array[$part];
                }else {
                    continue;
                }
    
            }

        }

        unset($array[array_shift($parts)]);
    }

    public static function unset($array,$key)
    {
        return static::set($array,$key,null);
    }

    public static function get($array,$keys,$defaul = null)
    {

        if(!static::accessible($array)){
            return value($default);
        }

        if($keys == ''){
            return $array;
        }

        if(static::exists($array,$keys)){
            return $array[$keys];
        }

        if(!str_contains($keys,'.')){
            return $array[$keys] ?? value($defaul);
        }

        foreach(explode('.',$keys) as $key){

            if(static::accessible($array) && static::exists($array,$key)){
                $array = $array[$key];
            }else {
                return value($defaul);
            }

        }
        return $array;
    }
    

    public static function set(&$array,$key,$value)
    {

        if($key == ''){
            return array_push($array,$value);
        }

        $keys = explode('.',$key);

        while(count($keys) > 1){

            $key = array_shift($keys);

            $array = &$array[$key];

        }

        $array[array_shift($keys)] = $value;
        return $array;
    }




}