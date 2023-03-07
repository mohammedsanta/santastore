<?php
namespace App\Controllers;
use App\Models\app_users;

class LoginController
{

    public function index()
    {
        View('auth.login');
    }

    public function login()
    {

        $user = app_users::login(request('username'),request('password'));

        if($user){
            $user = (array) $user[0];

            $_SESSION['user_profile'] = $user;
        }else {

            app()->session->setFlash('Failed','Error In Username Or Password');
            return back();
        }

        header('Location:/');

    }
    
}