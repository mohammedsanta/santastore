<?php
namespace App\Models;

use Santa\Support\Str;

abstract class Model
{
    protected static $instance;

    public static function create(array $attributes)
    {
        self::$instance = static::class;

        return app()->db->create($attributes);
    }

    public static function all()
    {
        self::$instance = static::class;

        return app()->db->read();
    }

    public static function where($filter,$column = '*')
    {
        self::$instance = static::class;

        return app()->db->read($column,$filter);
    }

    public static function update($id,$data)
    {
        self::$instance = static::class;

        return app()->db->update($id,$data);
    }

    public static function delete($id)
    {
        self::$instance = static::class;


        return app()->db->delete($id);
    }

    public static function count($table)
    {
        return app()->db->count($table);
    }

    public static function login($username,$password)
    {
        return app()->db->login($username,$password);
    }

    public static function getModel()
    {
        return self::$instance;
    }

    public static function getId()
    {
        return self::$instance::$id;
    }

    public static function getTableName()
    {
        return Str::lower(class_basename(self::$instance));
    }

}