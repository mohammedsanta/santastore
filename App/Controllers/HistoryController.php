<?php
namespace App\Controllers;
use App\Models\app_history;

class HistoryController
{

    public function index()
    {
        setTableLang('history');
        
        $data['actions'] = app_history::all();

        View('history.default',$data);
    }

}