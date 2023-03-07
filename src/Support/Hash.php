<?php
namespace Santa\Support;

class Hash
{

    public static function password($password)
    {
        return password_hash($password,PASSWORD_BCRYPT);
    }

    public static function make($password)
    {
        return sha1($password . time());
    }

    public static function verify($password,$verify)
    {
        return password_verify($password,$verify);
    }
    
}