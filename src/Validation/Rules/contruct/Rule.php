<?php
namespace Santa\Validation\Rules\contruct;


interface Rule
{

    public function apply($field,$value,$data);

    public function __toString();

}
