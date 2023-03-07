<?php
namespace Santa\Database\DatabaseManager;

use App\Models\Model;
use Santa\Database\MySQLGrammar\MySQLGrammar;
use Santa\Database\DatabaseManager\contracts\DatabaseManager;



class MySQLManager implements DatabaseManager
{

    protected static $instance;

    public function connect() : \PDO
    {
        if(!self::$instance){
            self::$instance = new \PDO(env('DB_DRIVER').':host='.env('DB_HOST').';dbname='.env('DB_NAME'),env('DB_USERNAME'),env('DB_PASSWORD'));
        }
        return self::$instance;
    }

    public function query($query,$values = [])
    {
        $stmt = self::$instance->prepare($query);

        for ($i = 1; $i <= count($values); $i++) {
            $stmt->bindValue($i, $values[$i - 1]);
        }

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }

    public function create($data)
    {

        $query = MySQLGrammar::buildInsertQuery(array_keys($data));

        $stmt = self::$instance->prepare($query);

        for($i = 1;$i <= count($values = array_values($data));$i++){
            $stmt->bindValue($i ,$values[$i - 1]);
        }
        return $stmt->execute();
    }

    public function read($column = '*',$filter = null)
    {

        $query = MySQLGrammar::buildSelectQuery($column,$filter);

        $stmt = self::$instance->prepare($query);

        if($filter){
            $stmt->bindValue(1,$filter[2]);
        }

        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS,Model::getModel());
    }

    public function update($id,$data)
    {

        $query = MySQLGrammar::buildUpdateQuery(array_keys($data));

        $stmt = self::$instance->prepare($query);

        for($i = 1;$i <= count($values = array_values($data));$i++){

            $stmt->bindValue($i , $values[$i - 1]);

            if($i == count($values)){
                $stmt->bindValue($i + 1,$id);
            }
        }
        return $stmt->execute();
    }

    public function delete($id)
    {
        $query = MySQLGrammar::buildDeleteQuery();

        $stmt = self::$instance->prepare($query);

        $stmt->bindValue(1,$id);
        
        return $stmt->execute();
    }

    public function count($table)
    {
        $query = "SELECT COUNT(*) FROM " . $table;

        $stmt = self::$instance->prepare($query);

        $stmt->execute();

        return $stmt->fetchColumn();
    }

    public function login($username,$password)
    {
        $query = "SELECT * FROM app_users WHERE Username='{$username}' AND Password='{$password}'";

        $stmt = self::$instance->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS,Model::getModel());
    }

}