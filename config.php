<?php

/**
 * @version 2.0
 * @autor Edwin Manuel Cerrón Angeles
 * @date 01/03/13
 */

/*
 * Ejemplos de dsn
 *
 * MySQL     > "mysql:host=hostname;dbname=mysql"
 * PosgreSQL > "pgsql:dbname=pdo;host=localhost"
 * SQLite    > "sqlite:/path/to/database.sdb" , username = null , password = null.
 *             "sqlite::memory"
 */

/*
    'options' => array(PDO::ATTR_PERSISTENT => true , PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
*/

return array(
    'db' => array(
        'dsn' => 'mysql:host=localhost;dbname=testdb',
        'username' => 'root',
        'password' => '',
        'prefix' => null,
        'collation' => 'utf8',
        'options' => array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
    ),
    'dummy' => null,
    'otro' => 'aqui valor de la configuración'
);