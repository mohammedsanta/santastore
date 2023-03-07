<?php
namespace Santa\Validation;

use Santa\Validation\Rules\MaxRule;
use Santa\Validation\Rules\EmailRule;
use Santa\Validation\Rules\UniqueRule;
use Santa\Validation\Rules\BetweenRule;
use Santa\Validation\Rules\RequiredRule;
use Santa\Validation\Rules\ConfirmedRule;
use Santa\Validation\Rules\AlphaNumericalRule;

class RuleMapper
{

    public static $rulesMap = [
        'required' => RequiredRule::class,
        'max' => MaxRule::class,
        'between' => BetweenRule::class,
        'alnum' => AlphaNumericalRule::class,
        'uniqe' => UniqueRule::class,
        'email' => EmailRule::class,
        'confirmed' => ConfirmedRule::class,
        'unique'    => UniqueRule::class
    ];

    

    public static function getFromString($rule)
    {

        
        $explode = (explode(':',$rule))[0];

        $options = explode(':',$rule);

        array_shift($options);

        $options = explode(',',end($options));

        return new static::$rulesMap[$explode](...$options);
    }

}