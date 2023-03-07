<?php
namespace App\Controllers;

use App\Models\app_items;
use Santa\Validation\Validator;


class ItemsController
{

    public $_data;

    public function index()
    {
        setTableLang('items');

        $this->_data['items'] = app_items::all();

        View('items.default',$this->_data);
    }

    public function viewCreate()
    {
        setTableLang('items');

        View('items.create');

    }

    public function create()
    {

        $v = new Validator;

        $v->setRules([
            'ItemName'      => 'required|between:8,16',
            'ItemPrice'      => 'required|between:8,16',
            'ItemDateBuy'      => 'required|between:8,16',
            'ItemSold'      => 'required|between:8,16',
            'ItemCost'      => 'required|between:8,16',
            'ItemDateSold'      => 'required|between:8,16',
            'ItemImg'      => 'required|between:8,16',
        ]);

        $v->make(request()->all());

        if(!$v->passes()){
            app()->session->setFlash('errors',$v->errors());
            app()->session->setFlash('old',request()->all());

            back();
        }

        app_items::create([
            'ItemName'      => request('ItemName'),
            'ItemPrice'     => request('ItemPrice'),
            'ItemDateBuy'   => request('ItemDateBuy'),
            'ItemSold'      => request('ItemSold'),
            'ItemCost'      => request('ItemCost'),
            'ItemDateSold'  => request('ItemDateSold'),
            'ItemImg'       => 'test',
        ]);
    }

}