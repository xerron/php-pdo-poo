php-pdo-poo
===========

## Acceso a Datos orientado a objetos 

Esta es una referencia, que puede ser usada para el aprendizaje o la construccion de un proyecto real.

### Requerimientos Minimos:

* PHP 5.3+
* MySQL 5+, SQLite 3+, PostgreSQL 8+ *
* PDO

**OBS:** * Puedes usar cualquier base de datos, solo debes modificar la clase usuario, ya que PDO no es una capa de abstraccion de Base de Datos, sino una capa de abstraccion de Acceso a Datos

### Buenas practicas:

* Uso de la capa de abstraccion de acceso a datos PDO.
* Patron de diseño singleton para la conección; Database::query();
* Real Programacion orientado a objetos.
* Aplicación del Estandar de Codificación [PSR-1](https://github.com/php-fig/fig-standards/tree/master/accepted).
* Uso de las mejoras de PHP 5.3+ (namespaces, __callStatic(), etc)
* Uso de un archivo de configuración; config.php
* Code Poetic: Codigo sencillo y limpio, sin magia negra.

### Demos:

* Demo 1 - Uso de la Clase Database.
* Demo 2 - Uso de la Clase Usuario.
* Demo 3 - Uso de la Clase Grid.

#### Base de datos de prueba:

    CREATE DATABASE `testdb` DEFAULT CHARACTER SET utf8;

    CREATE TABLE `usuario` (
     `id` int(11) NOT NULL AUTO_INCREMENT,
     `nombre` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
     `email` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
     `password` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
     PRIMARY KEY (`id`),
     UNIQUE KEY `email_UNIQUE` (`email`)
    ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8

### Uso de la Clase Database directamente

    $stmt = Database::prepare('SELECT * FROM usuario;');
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        echo $row['id'];
        echo $row['nombre'];
        echo $row['email'];
        echo $row['password'];
    }

### Uso de la Clase Usuario
#### Crear

    $obj_user = new Usuario("eManuel Cerrón","xerron@gmail.com","pass123");

**Obs:** Cuando se crea el objeto aun no se guarda en la Base de Datos, para grabrarlo debes usar el metodo "agregar".
#### Agregar

    $obj_user = new Usuario("eManuel Cerrón","xerron@gmail.com","pass123");
    $obj_user->agregar();
  
**Obs:** Se puede cambiar los valores del constructor con los metodos setNombre(); setEmail(); setPassword(); para despues usar agregar().
#### Seleccionar

    $obj_user = new Usuario();
    $obj_user->seleccionar(2);

**Obs:** Esto es para traer un registro de la Base de Datos, el parametro es el id.
#### Actualizar

    $obj_user = new Usuario();
    $obj_user->seleccionar(2);
    $obj_user->setEmail("nuevo_mail@hotmail.com");
    $obj_user->setNombre("Isaac Oswaldo Cerrón Angeles");
    $obj_user->actualizar();  

**Obs:** Solo se puede actualizar algo que esta en la Base de Datos, por esa razon se debe emplear el metodo seleccionar($id); para traer un usario modificarlo y luego actualizarlo.
#### Borrar

    $obj_user = new Usuario();
    $obj_user->seleccionar(2);
    $obj_user->eliminar(); 

**Obs:** La misma Observación de actualizar(). 

### Uso del grid con una consulta a la BD

    $stmt = Database::prepare('SELECT * FROM usuario;');
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $grid = new Grid($data);
    $grid->imprimir(null, 'table-3',null);

### Uso del grid con la Clase Usuario

    $user = new Usuario();
    $data = $user->getLista();

    $grid = new Grid($data);
    $grid->imprimir(null, 'table-3',null);

Cerrón Angeles Edwin Manuel - Ingeniero de Sistemas
