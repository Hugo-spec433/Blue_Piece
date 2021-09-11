<?php


namespace classes;


class Usuario
{

    protected $nombre;
    protected $apellido;
    protected $email;
    protected $id;
    protected $tipo;

    public function __construct($id, $nombre, $apellido, $email, $tipo) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->tipo = $tipo;
    }

    public static function registrar($user) {

        return Model::insertIntoDb('usuario', $user);

    }

    public static function login($userData) {

        $userDb = self::getUserByEmail($userData["email"]);

        $passwordMatch = $userDb["contraseña"] === $userData["password"];

        if($userDb && $passwordMatch) {

            return [
                'id' => $userDb["id"],
                'nombre' => $userDb["nombre"],
                'apellido' => $userDb["apellido"],
                'email' => $userDb["email"],
                'tipo' => $userDb["tipo"],
            ];

        }

        return FALSE;

    }

    public static function getUserByEmail($email) {

        $user = [
            'email' => $email,
        ];

        return Model::getFromDb("usuario", $user);

    }

    public static function deleteUser($userId) {

        $user = [
            'id' => $userId,
        ];

       return Model::deleteFromDb('usuario', $user);

    }


}