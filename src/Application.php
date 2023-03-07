<?php
namespace Santa;

use Santa\View\View;
use Santa\Http\Route;
use Santa\Database\DB;
use Santa\Http\Request;
use Santa\Http\Response;
use Santa\Support\Config;
use Santa\Support\Session;
use Santa\Database\DatabaseManager\MySQLManager;


class Application
{

    protected Request $request;
    protected Response $response;
    protected Route $route;
    protected Config $config;
    public DB $db;
    public Session $session;


    public function __construct()
    {
        $this->request = new Request;
        $this->response = new Response;
        $this->session = new Session;
        $this->route = new Route($this->request,$this->response);
        $this->config = new Config($this->loadConfigurations());
        $this->db = new DB($this->getConfigurations());
    }

    protected function getConfigurations()
    {
        return match(env('DB_DRIVER')){
            'mysql'     => new MySQLManager
        };
    }

    protected function loadConfigurations()
    {
        foreach(scandir(app_config()) as $file){

            if($file == '.' || $file == '..'){
                continue;
            }

            $filename = explode('.',$file)[0];

            yield $filename => require_once app_config() . $file;
        }
    }

    public function run()
    {

        if(!isset($_SESSION['lang'])){
            $_SESSION['lang'] = DEFAULT_LANG;
        }

        $this->db->init();
        View::header();
        $this->route->dispatch();
    }

    public function __get($key)
    {
        if(property_exists($this,$key)){
            $this->$key;
        }
    }


}