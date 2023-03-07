<?php
namespace Santa\View;


class View
{
    
    protected static $_header;
    protected static $_language;

    public static function header()
    {
        $lang = DEFAULT_LANG;

        $lang = $_SESSION['lang'];

        include app_lang() . $lang . '/header.php';

        static::$_header = $_;
    }

    public static function languageTable($table)
    {
        $lang = DEFAULT_LANG;

        $lang = $_SESSION['lang'];

        include app_lang() . $lang . '/' . $table . '.php';

        static::$_language = $_;
    }

    public static function make($view,$data = null,$params = [])
    {

        $baseContent = static::getBaseContent();

        $viewContent = static::getViewContent($view,params: [],data:$data = $data);

        echo str_replace('{{content}}',$viewContent,$baseContent);

    }

    public static function getBaseContent()
    {

        extract(static::$_header);

        ob_start();
        include app_view() . 'layouts/main.php';
        return ob_get_clean();

    }

    public static function getViewContent($view,$params,$data)
    {

        !is_null(static::$_language) ? extract(static::$_language) : '';

        $isError = false;

        $view = $isError ? app_view() . 'errors/': $view;

        extract($data);

        if(str_contains($view,'.')){


            $views = explode('.',$view);

            foreach($views as $file){

                if(is_dir(app_view() . $file)){
                    $path = $file . '/';
                }

            }

            $view = app_view() . $path . end($views) . '.php';

        }else {
            $view = app_view() . $view . '.php';
        }

        ob_start();
        include $view;
        return ob_get_clean();


    }

}