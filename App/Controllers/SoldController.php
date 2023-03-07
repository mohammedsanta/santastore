<?php
namespace App\Controllers;

use App\Models\app_items;
use App\Models\app_customers;
use App\Models\app_items_sold;
use Santa\Validation\Validator;

class SoldController
{

    public function index()
    {
        setTableLang('sold');

        $data['solds'] = app_items_sold::all();

        View('sold.default',$data);
    }

    public function viewCreate()
    {
        setTableLang('sold');

        $data['Item'] = app_items::all();
        $data['Customer'] = app_customers::all();

        View('sold.create',$data);
    }
    
    public function create()
    {

        $itemId = request()->all()['ItemId-ItemName'][0];
        $customerId = request()->all()['CustomerId-CustomerName'][0];

        $item = (array) app_items::where(['ItemId','=',$itemId])[0];
        $customer = (array) app_customers::where(['CustomerId','=',$customerId])[0];

        $v = new Validator;

        $v->setRules([
            'ItemName'      => 'required',
            'CustomerName'      => 'required'
        ]);

        $v->make(request()->all());

        if($v->passes()){
            app()->session->setFlash('errors',$v->errors());
            app()->session->setFlash('old',request()->all());
            return back();
        }

        app_items_sold::create([
            'ItemId'        => $item['ItemId'],
            'ItemName'        => $item['ItemName'],
            'ItemPrice'        => $item['ItemPrice'],
            'ItemCost'        => $item['ItemCost'],
            'ItemImg'        => $item['ItemImg'],
            'CustomerId'        => $customer['CustomerId'],
            'CustomerName'        => $customer['CustomerName'],
            'CustomerNumber'        => $customer['CustomerNumber'],
        ]);

        app()->session->setFlash('success','Add Has Been Successfully');
        return back();
    }
    
}