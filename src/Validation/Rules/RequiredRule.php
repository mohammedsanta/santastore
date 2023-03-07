<?php
namespace Santa\Validation\Rules;

use Santa\Validation\Rules\contruct\Rule;



class RequiredRule implements Rule
{

    public function apply($field,$value,$data)
    {
        return !empty($value);
    }

    public function __toString()
    {
        return "%s is required and cannot be empty";
    }

}

