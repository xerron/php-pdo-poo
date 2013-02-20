<?php
require "config.php";
require "Clases/database.php";
require "Clases/usuario.php";
require "Clases/grid.php";

use Clases\Grid;
use Clases\Usuario;
use Clases\Database;

/**
 * Estas lineas es para el autocompletado en PHPStorm 5.x o Netbeans 7.x
 *
 * @var \PDOStatement $stmt
 */

?>
<!DOCTYPE HTML>
<html lang="es-PE">
<head>
    <meta charset="UTF-8">
    <title>Programacion Real - Xerron</title>
    <link href="css/markdown.css" rel="stylesheet"></link>
    <link href="css/table.css" rel="stylesheet"></link>
</head>
<body>

<h1>Acceso a Datos orientado a objetos</h1>
<p>Esta es una referencia, que puede ser usada para el aprendizaje o la construccion de un proyecto real.</p>

<h3>Requerimientos Minimos:</h3>
<ul>
    <li>PHP 5.3+</li>
    <li>MySQL 5+, SQLite 3+, PostgreSQL 8+ *</li>
    <li>PDO</li>
</ul>
<p><strong>*</strong> Puedes usar cualquier base de datos, solo debes modificar la clase <strong>usuario</strong>, ya que PDO no es una capa de abstraccion de Base de Datos, sino una capa de abstraccion de Acceso a Datos</p>
<h3>Buenas practicas:</h3>
<ul>
    <li>Uso de la capa de abstraccion de acceso a datos PDO.</li>
    <li>Patron de diseño singleton para la conección; Database::query();</li>
    <li>Real Programacion orientado a objetos.</li>
    <li>Aplicación del Estandar de Codificación <a href="https://github.com/php-fig/fig-standards/tree/master/accepted">PSR-1</a>.</li>
    <li>Uso de las mejoras de PHP 5.3+ (namespaces, __callStatic(), etc)</li>
    <li>Uso de un archivo de configuración; config.php</li>
    <li>Code Poetic: Codigo sencillo y limpio, sin magia negra.</li>
</ul>
<h4>Demos:</h4>
<ul>
    <li><a href="demo1.php">Demo 1</a> - Uso de la Clase Database.</li>
    <li><a href="demo2.php">Demo 2</a> - Uso de la Clase Usuario.</li>
    <li><a href="demo3.php">Demo 3</a> - Uso de la Clase Grid.</li>
</ul>
<h4>Base de datos de prueba:</h4>
<pre>
CREATE DATABASE `testdb` DEFAULT CHARACTER SET utf8;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8

</pre>
<p>Cerrón Angeles Edwin Manuel - Ingeniero de sistemas</p>
</body>
</html>




