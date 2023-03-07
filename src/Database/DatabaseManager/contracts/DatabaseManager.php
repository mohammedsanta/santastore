<?php
namespace Santa\Database\DatabaseManager\contracts;


interface DatabaseManager
{

    public function connect() : \PDO;

    public function query(string $query,$value = []);

    public function create($data);

    public function read($column = '*',$filter = null);

    public function update($id,$data);

    public function delete($id);

}