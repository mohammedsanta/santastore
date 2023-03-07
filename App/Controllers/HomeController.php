<?php
namespace App\Controllers;

use Santa\View\View;

class HomeController
{

    public function index()
    {
        View('home');
    }
    
}