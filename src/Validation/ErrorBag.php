<?php
namespace Santa\Validation;

class ErrorBag
{

    protected $errors = [];

    public function add($field,$message)
    {
        $this->errors[$field][] = $message;
    }

    public function __get($key)
    {
        if(property_exists($this,$key)){
            return $this->$key;
        }
    }

}