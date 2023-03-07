<?php
namespace Santa\Http;

class Response
{

    public function setStatusCode($code)
    {
        return http_response_code($code);
    }
    
    public function back()
    {
        return header('Location:' . $_SERVER['HTTP_REFERER']);
    }

}