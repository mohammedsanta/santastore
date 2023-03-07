<?php
namespace Santa\Database\Concerns;

class ConnectsTo
{

    public static function connect($manager)
    {
        return $manager->connect();
    }

}