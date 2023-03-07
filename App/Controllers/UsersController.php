<?php
namespace App\Controllers;

use App\Models\app_users;
use Santa\Validation\Validator;

class UsersController
{

    public function index()
    {

        $data['users'] = app_users::all();

        setTableLang('users');

        View('users.default',$data);
    }

    public function viewCreate()
    {
        setTableLang('users');

        View('users.create');
    }

    public function create()
    {

        $v = new Validator;

        $v->setRules([
            'Username'      => 'required|between:5,20',
            'FirstName'      => 'required|between:5,20',
            'LastName'      => 'required|between:5,20',
            'Password'      => 'required|between:5,20',
            'CPassword'      => 'required|between:5,20,',
            'Email'      => 'required|between:5,20',
            'CEmail'      => 'required|between:5,20',
        ]);

        $v->make(request()->all());

        if(!$v->passes()){
            app()->session->setFlash('errors',$v->errors());
            app()->session->setFlash('old',request()->all());
            return back();
        }

        app_users::create([
            'Username'      => request('Username'),
            'FirstName'      => request('FirstName'),
            'LastName'      => request('LastName'),
            'Password'      => request('Password'),
            'Email'      => request('Email'),
        ]);

        app()->session->setFlash('success','Create Has Been Successfully');
        return back();
    }
    
    public function viewEdit($params = [])
    {
        setTableLang('users');

        $user = (array) app_users::where(['UserId','=',$params])[0];
        
        app()->session->setFlash('old',$user);

        View('users.edit');
    }
    
    public function edit($params)
    {

        $v = new Validator;

        $v->setRules([
            'Username'  => 'required|between:5,20',
            'FirstName'  => 'required|between:5,20',
            'LastName'  => 'required|between:5,20',
            'Email'  => 'required|between:5,20',
        ]);

        $v->make(request()->all());

        if(!$v->passes()){
            app()->session->setFlash('errors',$v->errors());
            app()->session->setFlash('old',request()->all());

            return back();
        }

        app_customers::update($params,[
            'Username'      => request('Username'),
            'FirstName'      => request('FirstName'),
            'LastName'      => request('LastName'),
            'Email'      => request('Email')
        ]);

        app()->session->setFlash('success','Edit Has Been Successfully');
        return back();
    }

    public function delete($params)
    {
        app_customers::delete($params);

        back();
    }
    
}