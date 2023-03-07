<?php
namespace Santa\Support;

class passData
{

    protected $_data;

    public function setData($name,$data)
    {
        $this->_data[$name] = $data;
    }
    
    public function getData($key)
    {
        return $this->_data[$key];
    }

}