<?php
namespace App\Models;

class app_users extends Model
{

    public static $id = 'UserId';

    public $UserId;    
    public $Username;    
    public $FirstName;    
    public $LastName;    
    public $Password;    
    public $Email;    
    public $Status;    
    public $privilege;    

}