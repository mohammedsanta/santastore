<?php
namespace Santa\Validation;

use Santa\Validation\Message;
use Santa\Validation\ErrorBag;
use Santa\Validation\RuleMapper;


class Validator
{

    public $rules = [];
    public $data = [];
    public $aliases = [];
    public ErrorBag $errorBag;

    public function make($data)
    {

        $this->data = $data;
        $this->errorBag = new ErrorBag;
        $this->validator();

    }

    protected function validator()
    {

        foreach($this->rules as $field => $rules){
            foreach(ResolveRule::resolveRule($rules) as $rule){
                $this->applyRule($field, $rule);
            }
        }

    }

    protected function applyRule($field,$rule)
    {
        if (!$rule->apply($field, $this->getFieldValue($field), $this->data)) {
            $this->errorBag->add($field, Message::generate($rule, $this->aliases($field)));
        }
    }

    protected function getFieldValue($field)
    {
        return $this->data[$field] ?? null;
    }


    public function setRules($rules)
    {
        $this->rules = $rules;
    }
    

    public function passes()
    {
        return empty($this->errors());
    }

    public function errors($key = null)
    {
        return $key ? $this->errorBag->errors[$key] : $this->errorBag->errors;
    }

    public function aliases($field)
    {
        return $this->aliases[$field] ?? $field;
    }

    public function setAliases($aliases)
    {
        $this->aliases = $aliases;
    }



}