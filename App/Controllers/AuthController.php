<?php
namespace App\Controllers;

use App\Models\app_users;

class AuthController
{

    public static function auth()
    {

        if(!isset($_SESSION['user_profile']) && $_SERVER['REQUEST_URI'] != '/login' && $_SERVER['REQUEST_URI'] != '/accessdenied'){
            header("Location:/login");
        }
        
        if(isset($_SESSION['user_profile']) && $_SERVER['REQUEST_URI'] == '/login' && $_SERVER['REQUEST_URI'] == '/accessdenied'){
            header("Location:" . $_SERVER['HTTP_REFERER']);
        }
    }

}