<?php
namespace Santa\Database;

use Santa\Database\Concerns\ConnectsTo;
use Santa\Database\DatabaseManager\contracts\DatabaseManager;

class DB
{

    protected DatabaseManager $manager;

    public function __construct($manager)
    {
        $this->manager = $manager;
    }

    public function init()
    {
        ConnectsTo::connect($this->manager);
    }

    public function query($query,$value)
    {
        return $this->manager->query();
    }

    public function create($data)
    {
        return $this->manager->create($data);
    }
    
    public function read($column = '*',$filter = null)
    {
        return $this->manager->read($column,$filter);
    }

    public function raw($query,$value)
    {
        return $this->manager->query($query,$value);
    }

    public function update($id,$data)
    {
        return $this->manager->update($id,$data);
    }

    public function delete($id)
    {
        return $this->manager->delete($id);
    }

    public function count($table)
    {
        return $this->manager->count($table);
    }

    public function login($username,$password)
    {
        return $this->manager->login($username,$password);
    }

}