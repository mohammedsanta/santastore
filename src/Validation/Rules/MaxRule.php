<?php
namespace Santa\Validation\Rules;

use Santa\Validation\Rules\contruct\Rule;


class MaxRule implements Rule
{

    protected int $max;

    public function __construct(int $max)
    {
        $this->max = $max;
    }

    public function apply($field,$value,$data)
    {
        return (strlen($value) < $this->max);
    }

    public function __toString()
    {
        return "%s must be less than " . $this->max;
    }

}