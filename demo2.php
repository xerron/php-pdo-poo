<?php
require 'Clases/usuario.php';

use Clases\Usuario;

/**
 * Estas lineas es para el autocompletado en PHPStorm 5.x o Netbeans 7.x
 *
 * @var \PDOStatement $stmt
 */

$obj_user = new Usuario("eManuel Cerrón Angeles","xerron.angels@gmail.com","password123");

?>
<!DOCTYPE HTML>
<html lang="es-PE">
<head>
    <meta charset="UTF-8">
    <title>Uso - Clase Usuario</title>
    <link href="css/markdown.css" rel="stylesheet"></link>
    <link href="css/table.css" rel="stylesheet"></link>
</head>
<body>

<h2> Uso de la Clase Usuario</h2>

<!--  Crear -->
<h3>Crear</h3>
<code>
    <pre>
$obj_user = new Usuario("eManuel Cerrón","xerron@gmail.com","pass123");
    </pre>
</code>


<p>
    <strong>Obs:</strong> Cuando se crea el objeto aun no se guarda en la Base de Datos, para grabrarlo debes usar el metodo "agregar".
</p>

<!--  Agregar -->

<h3>Agregar</h3>
<code>
    <pre>
$obj_user = new Usuario("eManuel Cerrón","xerron@gmail.com","pass123");
$obj_user->agregar();
    </pre>
</code>
<p>
    <strong>Obs:</strong> Se puede cambiar los valores del constructor con los metodos setNombre(); setEmail(); setPassword(); para despues usar agregar().
</p>

<!--  Seleccionar -->

<h3>Seleccionar</h3>
<code>
    <pre>
$obj_user = new Usuario();
$obj_user->seleccionar(2);
    </pre>
</code>
<p>
    <strong>Obs:</strong> Esto es para traer un registro de la Base de Datos, el parametro es el <em>id</em>.
</p>

<!--  Actualizar -->

<h3>Actualizar</h3>
<code>
    <pre>
$obj_user = new Usuario();
$obj_user->seleccionar(2);
$obj_user->setEmail("nuevo_mail@hotmail.com");
$obj_user->setNombre("Isaac Oswaldo Cerrón Angeles");
$obj_user->actualizar();
    </pre>
</code>
<p>
    <strong>Obs:</strong> Solo se puede actualizar algo que esta en la Base de Datos, por esa razon se debe emplear el metodo seleccionar($id); para traer un usario modificarlo y luego actualizarlo.
</p>

<!--  Borrar -->

<h3>Borrar</h3>
<code>
    <pre>
$obj_user = new Usuario();
$obj_user->seleccionar(2);
$obj_user->eliminar();
    </pre>
</code>
<p>
    <strong>Obs:</strong> La misma Observación de actualizar().
</p>



</body>
</html>




