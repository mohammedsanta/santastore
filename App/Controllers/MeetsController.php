<?php
namespace App\Controllers;

use Santa\Validation\Validator;
use App\Models\app_meets;

class MeetsController
{

    public function index()
    {
        $data['meets'] = app_meets::all();

        setTableLang('meets');

        View('meets.default',$data);
    }

    public function viewCreate()
    {
        setTableLang('meets');

        View('meets.create');
    }

    public function create()
    {

        $v = new Validator;

        $v->setRules([
            'MeetDate'      => 'required',
            'MeetLocation'  => 'required'
        ]);

        $v->make(request()->all());

        if(!$v->passes()){
            app()->session->setFlash('old',request()->all());
            app()->session->setFlash('errors',$v->errors());

            return back();
        }

        app_meets::create([
            'MeetDate'          => request('MeetDate'),
            'MeetLocation'      => request('MeetLocation'),
        ]);

        app()->session->setFlash('success','Create Successfully');
        back();
    }

    public function delete($params)
    {
        app_meets::delete($params);

        back();
    }

}