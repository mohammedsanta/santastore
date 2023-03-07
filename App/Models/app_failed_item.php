<?php
namespace App\Models;


class app_failed_item extends Model
{

    public static $id = 'FailedId';

    public $FailedId;
    public $ItemName;
    public $CustomerName;
    public $Reasone;
    public $Date;

}