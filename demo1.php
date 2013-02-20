<?php
require "config.php";
require "Clases/database.php";

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
    <title>Uso - Database </title>
    <link href="css/markdown.css" rel="stylesheet"></link>
    <link href="css/table.css" rel="stylesheet"></link>
</head>
<body>

<h2> Uso de la Clase Database directamente</h2>

<code>
<pre>
    $stmt = Database::prepare('SELECT * FROM usuario;');
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        echo $row['id'];
        echo $row['nombre'];
        echo $row['email'];
        echo $row['password'];
    }
</pre>
</code>

<?php

$stmt = Database::prepare('SELECT * FROM usuario;');
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<h3>Resultado:</h3>

<?php

foreach ($result as $row) {
    echo $row['id'] . '<br>';
    echo $row['nombre'] . '<br>';
    echo $row['email'] . '<br>';
    echo $row['password'] . '<br>';
}
?>

<hr>
<h3>Contenido del Array ($result):</h3>
<pre>
<?php var_dump($result); ?>
</pre>

</body>
</html>




