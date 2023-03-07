<?php
namespace Santa\Validation;

use Santa\Validation\RuleMapper;


class ResolveRule
{

    public static function resolveRule($rules)
    {

        $rules = (array) str_contains($rules,'|') ? explode('|',$rules) : $rules ;

        return array_map(function($rule){

            if(is_string($rule)){
                return RuleMapper::getFromString($rule);
            }

        },$rules);

        return $rules;
    }




}