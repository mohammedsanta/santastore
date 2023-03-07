<?php
namespace App\Controllers;

use App\Models\app_users;

class LanguageController
{

    public function language()
    {

        if($_SESSION['lang'] == 'en'){
            $_SESSION['lang'] = 'ar';
        }elseif($_SESSION['lang'] == 'ar'){
            $_SESSION['lang'] = 'en';
        }

        back();
    }
    
}