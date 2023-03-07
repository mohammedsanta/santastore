<?php
namespace App\Controllers;

use Santa\Validation\Validator;
use App\Models\app_idiot_item;

class IdiotItemsController
{

    public function index()
    {
        setTableLang('idiot');

        $data['idiotitems'] = app_idiot_item::all();

        View('idiotitems.default',$data);
    }

    public function viewCreate()
    {
        setTableLang('idiot');

        View('idiotitems.create');
    }

    public function create()
    {
        $v = new Validator;

        $v->setRules([
            'ItemName' => 'required|between:3,30',
            'ItemdateBuy' => 'required',
            'ItemAbout' => 'required|between:5,30',
        ]);

        $v->make(request()->all());

        if(!$v->passes()){
            app()->session->setFlash('errors',$v->errors());
            app()->session->setFlash('old',request()->all());

            return back();
        }


        app_idiot_item::create([
            'ItemName' =>   request('ItemName'),
            'ItemdateBuy' =>   request('ItemdateBuy'),
            'ItemAbout' =>   request('ItemAbout'),
        ]);

        app()->session->setFlash('success','Create Has Been Successfully');

        return back();
    }

}