<?php
namespace Santa\Validation;

class Message
{

    public static function generate($field,$rule)
    {
        return str_replace('%s',$rule,$field);
    }

}