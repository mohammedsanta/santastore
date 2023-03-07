<?php
namespace Santa\Validation\Rules;

class EmailRule
{

    public function apply($field,$value,$data)
    {
        return preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $value);
    }
    
    public function __toString()
    {
        return "Your %s is not a valid email address";
    }

}