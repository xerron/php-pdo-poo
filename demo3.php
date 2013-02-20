<?php
require "config.php";
require "Clases/database.php";
require "Clases/usuario.php";
require "Clases/grid.php";

use Clases\Usuario;
use Clases\Grid;
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
    <title>Uso - Clase Grid</title>
    <link href="css/markdown.css" rel="stylesheet"></link>
    <link href="css/table.css" rel="stylesheet"></link>
</head>
<body>

<h2> Uso del grid con una consulta a la BD</h2>

<pre>
$stmt = Database::prepare('SELECT * FROM usuario;');
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$grid = new Grid($data);
$grid->imprimir(null, 'table-3',null);
</pre>

<h3>Resultado:</h3>
<?php

$stmt = Database::prepare('SELECT * FROM usuario;');
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$grid = new Grid($data);
$grid->imprimir(null, 'table-3',null);

?>


<h2> Uso del grid con la Clase Usuario</h2>

<pre>
$user = new Usuario();
$data = $user->getLista();

$grid = new Grid($data);
$grid->imprimir(null, 'table-3',null);
</pre>
<h3>Resultado:</h3>
<?php

$user = new Usuario();
$data = $user->getLista();

$grid = new Grid($data);
$grid->imprimir(null, 'table-3',null);

?>


</body>
</html>




