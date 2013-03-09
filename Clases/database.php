<?php
/**
 * @version 1.0
 * @autor Edwin Manuel Cerrón Angeles
 * @date 02/02/13
 */

namespace Clases;

use PDO;

class Database
{
    private static $link = null;

    private function __construct(){

    }
    private function __clone()
    {
    }

    private static function getLink()
    {
        if (self :: $link) {
            return self :: $link;
        }
        $config = Config::getInstance();
        self :: $link = new PDO ($config->db['dsn'], $config->db['username'], $config->db['password'], $config->db['options']);
        self :: $link->exec("SET NAMES utf8");
        self :: $link->exec("SET CHARACTER SET utf8");

        return self :: $link;
    }

    public static function __callStatic($name, $args)
    {
        $callback = array(self :: getLink(), $name);
        return call_user_func_array($callback, $args);
    }
}