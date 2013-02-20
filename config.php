<?php

/**
 * @version 1.0
 * @autor Edwin Manuel Cerrón Angeles
 * @date 02/02/13
 */

/*
 * Ejemplos de dsn
 *
 * MySQL     > "mysql:host=hostname;dbname=mysql"
 * PosgreSQL > "pgsql:dbname=pdo;host=localhost"
 * SQLite    > "sqlite:/path/to/database.sdb" , username = null , password = null.
 *             "sqlite::memory"
 *
 *
 */

/*
$db = array(
    'dsn' => 'mysql:host=localhost;dbname=testdb',
    'username' => 'root',
    'password' => 'root',
    'prefix' => 'xerron_',
    'collation' => 'utf8',
    'options' => array(PDO::ATTR_PERSISTENT => true , PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)

);
*/


$db = array(
    'dsn' => 'mysql:host=localhost;dbname=testdb',
    'username' => 'root',
    'password' => 'root',
    'prefix' => null,
    'collation' => 'utf8',
    'options' =>  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
);
