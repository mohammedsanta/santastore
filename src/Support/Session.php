<?php
namespace Santa\Support;


class Session
{

    public function getProfile($key)
    {
        return $_SESSION['user_profile'][$key];
    }

    public function set($key,$value)
    {
        $_SESSION[$key] = $value;
    }

    public function get($key)
    {
        return $_SESSION[$key];
    }

    public function has($key)
    {
        return (isset($_SESSION[$key]));
    }

    public function remove($key)
    {
        if($this->has($key)){
            unset($_SESSION[$key]);
        }
    }

    public function setFlash($key,$message)
    {
        $_SESSION['flash_messages'][$key] = [
            'remove'     => false,
            'content'   => $message
        ];
    }

    public function hasFlash($key)
    {
        return (isset($_SESSION['flash_messages'][$key]));
    }

    public function __construct()
    {
        $flashMessages = $_SESSION['flash_messages'] ?? [];

        foreach($flashMessages as $key => &$flashMessage){
            $flashMessage['remove'] = true;
        }
        $_SESSION['flash_messages'] = $flashMessages;
    }

    public function __destruct()
    {
        $this->removeFlashMessages();
    }

    public function removeFlashMessages()
    {
        $flashMessages = $_SESSION['flash_messages'] ?? [];

        foreach($flashMessages as $key => $flashMessage){
            if($flashMessage['remove']){
                unset($flashMessages[$key]);
            }
        }
        $_SESSION['flash_messages'] = $flashMessages;
        }

    public function getFlash($key)
    {
        return $_SESSION['flash_messages'][$key]['content'] ?? false;
    }

}
