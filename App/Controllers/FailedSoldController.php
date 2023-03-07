<?php
namespace App\Controllers;

use Santa\Validation\Validator;
use App\Models\app_failed_item;

class FailedSoldController
{

    public function index()
    {
        setTableLang('failedsold');

        $data['faileds'] = app_failed_item::all();

        View('failedsold.default',$data);
    }

    public function viewCreate()
    {
        setTableLang('failedsold');

        View('failedsold.create');
    }

    public function create()
    {

        $v = new Validator;

        $v->setRules([
            'ItemName'      => 'required|between:5,20',
            'CustomerName'      => 'required|between:5,20',
            'Reasone'      => 'required|between:5,20',
            'Date'      => 'required|between:5,20'
        ]);

        $v->make(request()->all());

        if(!$v->passes()){
            app()->session->setFlash('errors',$v->errors());
            app()->session->setFlash('old',request()->all());
            return back();
        }

        app_failed_item::create([
            'ItemName'      => request('ItemName'),
            'CustomerName'      => request('CustomerName'),
            'Reasone'      => request('Reasone'),
            'Date'      => request('Date')
        ]);

        app()->session->setFlash('success','Create Has Been Successfully');
        return back();
    }
    
    public function viewEdit($params)
    {
        setTableLang('failedsold');

        $failed = (array) app_failed_item::where(['FailedId','=',$params])[0];

        app()->session->setFlash('old',$failed);

        View('failedsold.edit');
    }
    
    public function edit($params)
    {

        $v = new Validator;

        $v->setRules([
            'ItemName'      => 'required|between:5,20',
            'CustomerName'      => 'required|between:5,20',
            'Reasone'      => 'required|between:5,20',
            'Date'      => 'required|between:5,20'
        ]);

        $v->make(request()->all());

        if(!$v->passes()){
            app()->session->setFlash('errors',$v->errors());
            app()->session->setFlash('old',request()->all());

            return back();
        }

        app_failed_item::update($params,[
            'ItemName'      => request('ItemName'),
            'CustomerName'      => request('CustomerName'),
            'Reasone'      => request('Reasone'),
            'Date'      => request('Date')
        ]);

        app()->session->setFlash('success','Edit Has Been Successfully');
        return back();
    }

    public function delete($params)
    {
        app_failed_item::delete($params);

        back();
    }
    
}