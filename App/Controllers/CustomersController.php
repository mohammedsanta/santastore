<?php
namespace App\Controllers;

use Santa\View\View;
use App\Models\app_customers;
use Santa\Validation\Validator;

class CustomersController
{

    public function view()
    {

        $data = app_customers::all();

        View::languageTable('customers');

        View('customers.default',$data);
    }

    public function viewCreate()
    {
        View::languageTable('customers');

        View('customers.create');
    }

    public function create()
    {

        $v = new Validator;

        $v->setRules([
            'CustomerName'  => 'required|between:5,20',
            'CustomerNumber'  => 'required|between:5,20',
            'CustomerAccount'  => 'required|between:5,20',
            'CustomerReferer'  => 'required|between:5,20',
            'CustomerAge'  => 'required|between:5,20',
            'CustomerAddress'  => 'required|between:5,20',
            'CustomerIs'  => 'required|between:5,20',
            'CustomerAbout'  => 'required|between:5,20',
        ]);

        $v->make(request()->all());

        if(!$v->passes()){

            app()->session->setFlash('errors',$v->errors());
            app()->session->setFlash('old',request()->all());

            return back();
        }

        app_customers::create([
            'CustomerName'      => request('CustomerName'),
            'CustomerNumber'      => request('CustomerNumber'),
            'CustomerAccount'      => request('CustomerAccount'),
            'CustomerReferer'      => request('CustomerReferer'),
            'CustomerAge'      => request('CustomerAge'),
            'CustomerAddress'      => request('CustomerAddress'),
            'CustomerIs'      => request('CustomerIs'),
            'CustomerAbout'      => request('CustomerAbout'),
            'CustomerPicture'      => 'test',
        ]);

        app()->session->setFlash('success','Registry Successfult');

        back();
    }

    public function editView($params)
    {
        $customers = (array) app_customers::where(['CustomerId','=',$params])[0];

        app()->session->setFlash('old',$customers);

        View::languageTable('customers');

        View('customers.edit');

    }

    public function edit($params)
    {

        $v = new Validator;

        $v->setRules([
            'CustomerName'  => 'required|between:5,20',
            'CustomerNumber'  => 'required|between:5,20',
            'CustomerAccount'  => 'required|between:5,20',
            'CustomerReferer'  => 'required|between:5,20',
            'CustomerAge'  => 'required|between:5,20',
            'CustomerAddress'  => 'required|between:5,20',
            'CustomerIs'  => 'required|between:5,20',
            'CustomerAbout'  => 'required|between:5,20',
        ]);

        $v->make(request()->all());

        if(!$v->passes()){
            app()->session->setFlash('errors',$v->errors());
            app()->session->setFlash('old',request()->all());

            return back();
        }

        app_customers::update($params,[
            'CustomerName'      => request('CustomerName'),
            'CustomerNumber'      => request('CustomerNumber'),
            'CustomerAccount'      => request('CustomerAccount'),
            'CustomerReferer'      => request('CustomerReferer'),
            'CustomerAge'      => request('CustomerAge'),
            'CustomerAddress'      => request('CustomerAddress'),
            'CustomerIs'      => request('CustomerIs'),
            'CustomerAbout'      => request('CustomerAbout'),
            'CustomerPicture'      => 'test',
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