<?php
namespace App\Controllers;

use Santa\Validation\Validator;
use App\Models\app_needs;

class NeedsController
{

    public function index()
    {
        setTableLang('needs');

        $data['needs'] = app_needs::all();

        View('needs.default',$data);
    }

    public function viewCreate()
    {
        setTableLang('needs');

        View('needs.create');
    }

    public function create()
    {

        action('Create');

        $v = new Validator;

        $v->setRules([
            'ItemName'      => 'required|between:5,10',
            'NumberNeeds'      => 'required|between:5,10',
            'NumberSold'      => 'required|between:5,10',
        ]);

        $v->make(request()->all());

        if(!$v->passes()){
            app()->session->setFlash('old',request()->all());
            app()->session->setFlash('errors',$v->errors());

            return back();
        }

        app_needs::create([
            'ItemName'          => request('ItemName'),
            'NumberNeeds'          => request('NumberNeeds'),
            'NumberSold'      => request('NumberSold'),
        ]);



        app()->session->setFlash('success','Create Successfully');
        return back();
    }

    public function viewEdit($params = [])
    {
        setTableLang('needs');

        $need = (array) app_needs::where(['ItemId','=',$params])[0];
        
        app()->session->setFlash('old',$need);

        View('needs.edit');
    }
    
    public function edit($params)
    {

        $v = new Validator;

        $v->setRules([
            'ItemName'      => 'required|between:5,10',
            'NumberNeeds'      => 'required|between:5,10',
            'NumberSold'      => 'required|between:5,10',
        ]);

        $v->make(request()->all());

        if(!$v->passes()){
            app()->session->setFlash('errors',$v->errors());
            app()->session->setFlash('old',request()->all());

            return back();
        }

        app_needs::update($params,[
            'ItemName'          => request('ItemName'),
            'NumberNeeds'          => request('NumberNeeds'),
            'NumberSold'      => request('NumberSold')
        ]);

        app()->session->setFlash('success','Edit Has Been Successfully');
        return back();
    }

    public function delete($params)
    {
        app_needs::delete($params);

        back();
    }

}