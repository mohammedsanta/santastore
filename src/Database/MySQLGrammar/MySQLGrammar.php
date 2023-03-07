<?php
namespace Santa\Database\MySQLGrammar;

use App\Models\Model;

class MySQLGrammar
{

    public static function buildInsertQuery($keys)
    {

        $value = '';

        for($i = 0;$i < count($keys);$i++){
            $value .= '?, ';
        }

        $query = "INSERT INTO " . Model::getTableName() . " (`" . implode('`,`',$keys) . "`) VALUES(" . rtrim($value,', ') . ")";

        return $query;

    }

    public static function buildSelectQuery($column = '*',$filter = null)
    {

        $query = "SELECT {$column} FROM " . Model::getTableName();

        if($filter){
            $query .= " WHERE {$filter[0]} {$filter[1]} ?";
        }
        
        return $query;
    }

    public static function buildUpdateQuery($keys)
    {
        $query = "UPDATE " . Model::getTableName() . " SET ";

        for($i = 0;$i < count($values = array_values($keys));$i++){
            $query .= $keys[$i] . " = ?, ";
        }

        return rtrim($query,', ') . " WHERE " . Model::getId() . " = ?";
    }

    public static function buildDeleteQuery()
    {
        return "DELETE FROM " . Model::getTableName() . " WHERE " . Model::getId() . " = ?";
    }
    
}