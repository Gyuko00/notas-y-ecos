<?php

class Usuario
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function buscarPorCredenciales($nombreUsuario, $contrasena)
    {
        $query = "SELECT * FROM usuarios WHERE nombreUsuario = :nombreUsuario AND contrasena = SHA2(:contrasena, 256)";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':nombreUsuario', $nombreUsuario);
        $stmt->bindParam(':contrasena', $contrasena);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
