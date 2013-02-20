<?php
/**
 * @version 1.0
 * @autor Edwin Manuel Cerrón Angeles
 * @date 02/02/13
 */
namespace Clases;

use PDO;

class Usuario
{

    private $id;
    private $nombre;
    private $email;
    private $password;

    public function __construct($nombre = null , $email =  null , $password = null)
    {
        $this->id = null;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function seleccionar($id)
    {
        /**
         * @var \PDOStatement $stmt
         */
        $stmt = Database::prepare("SELECT * FROM usuario WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $result = $stmt->execute();
        return $result;
    }

    public function agregar()
    {
        /**
         * @var \PDOStatement $stmt
         */
        $stmt = Database::prepare("INSERT INTO usuario (nombre, email, password) VALUES(:nombre, :email, :password)");
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();
    }

    public function eliminar()
    {
        /**
         * @var \PDOStatement $stmt
         */
        $stmt = Database::prepare("DELETE FROM usuario WHERE id = :id");
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }

public function actualizar()
    {
        /**
         * @var \PDOStatement $stmt
         */
        $stmt = Database::prepare("UPDATE agenda SET  nombre = :nombre, email = :email, password = :password WHERE id = :id");
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();
    }

    public function getLista()
    {
        /**
         * @var \PDOStatement $stmt
         */
        $stmt = Database::prepare("SELECT * FROM usuario");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}
