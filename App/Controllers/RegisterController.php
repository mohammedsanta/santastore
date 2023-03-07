<?php
namespace App\Controllers;

use Santa\Validation\Validator;
use App\Models\app_users;


class RegisterController
{

    public function index()
    {
        return View('auth.signup');
    }

    public function store()
    {
        
        $v = new Validator;

        $v->setRules([
            'FirstName'                      => 'required|alnum|between:8,32',
            'username'                  => 'required|alnum|between:8,32|unique:app_users,username',
            'email'                     => 'required|alnum|between:8,32|unique:app_users,email',
            'password'                  => 'required|alnum|between:16,32|confirmed',
            'password_confirmation'    => 'required|alnum|between:16,64'
        ]);

        
        $v->setAliases(['password_confirmation' => 'password confirmation ']);

        $v->make(request()->all());

        if(!$v->passes()){
            app()->session->setFlash('errors',$v->errors());
            app()->session->setFlash('old',request()->all());

            return back();
        }

        app_users::create([
            'FirstName' => request('FirstName'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password'),
        ]);

        app()->session->setFlash('success','Registery Successflly');

        return back();
    }

}















































// $v->make(request()->all());

// if(!$v->passes()){
//     app()->session->setFlash('errors',$v->errors());
//     app()->session->setFlash('old',request()->all());

//     return back();
// }

// app_users::create([
//     'username'  => request('username'),
//     'FirstName'      => request('FirstName'),
//     'email'     => request('email'),
//     'password'  => request('password'),
// ]);

// app()->session->setFlash('success','Reqgister Successfully');

// return back();