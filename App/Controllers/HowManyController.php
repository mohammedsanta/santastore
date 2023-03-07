<?php
namespace App\Controllers;

use App\Models\app_how_many;

class HowManyController
{

    public function index()
    {
        setTableLang('howmany');

        $data['customers'] = app_how_many::count('app_customers');
        $data['failedItem'] = app_how_many::count('app_failed_item');
        $data['idiotItems'] = app_how_many::count('app_idiot_item');
        $data['items'] = app_how_many::count('app_items');
        $data['soldItems'] = app_how_many::count('app_items_sold');
        $data['meets'] = app_how_many::count('app_meets');
        $data['users'] = app_how_many::count('app_users');

        View('howmany.default',$data);

    }



}