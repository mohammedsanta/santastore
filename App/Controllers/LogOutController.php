<?php
namespace App\Controllers;

use App\Models\app_users;

class LogOutController
{

    public function logout()
    {

        unset($_SESSION['user_profile']);

        header("Location:" . '/login');
    }
    
}