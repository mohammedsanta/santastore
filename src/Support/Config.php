<?php
namespace Santa\Support;

class Config implements \ArrayAccess
{

    public $items = [];

    public function __construct($items)
    {

        foreach($items as $key => $item){
            $this->items[$key] = $item;
        }

    }

    public function get($key,$default = null)
    {

        if(is_array($key)){
            return $this->getMany($this->items,$default);
        }

        return Arr::get($this->items,$key,$default);
    }

    public function getMany($keys,$default = null)
    {

        $config = [];

        foreach($keys as $key => $default){

            if(is_numeric($key)){
                [$key , $default] = [$default ,null];
            }
            $config[$key] = Arr::get($this->items,$key,$value);
        }
        return $config;
    }

    public function set($key,$value = null)
    {
        $keys = is_array($key) ? $key : [$key => $value];

        foreach($keys as $key => $value){
            Arr::set($this->items,$key,$value);
        }
    }

    public function push($key,$value)
    {

        $array = $this->get($key);

        $array[] = $value;

        $this->set($key,$value);
    }

    public function all()
    {
        return $this->items;
    }

    public function exists($key)
    {
        return Arr::exists($this->items,$key);
    }

    public function offsetExists($offset): bool
    {
        return $this->Exists($offset);
    }

    public function offsetGet($offset): mixed
    {
        return $this->get($offset);
    }

    public function offsetSet($offset,$value): void
    {
        $this->set($offset,$value);
    }

    public function offsetUnset($offset): void
    {
        $this->set($offset,null);
    }

}