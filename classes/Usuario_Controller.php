<?php


namespace classes;


class Usuario_Controller extends Controller
{

    public function usuario(): void
    {

        $this->patientWord();
    }


    public function registrar(): void
    {

        if(!empty($_POST)) {

            $password = !empty($_POST['password']) ? $_POST['password'] : FALSE;
            $password2 = !empty($_POST['password2']) ? $_POST['password2'] : FALSE;

            if($password === $password2) {
                //Contraseñas Coinciden

                //Email ya registrado ?
                $email = [
                    'email' => $_POST["email"],
                ];

                $emailDb = Model::getFromDb('usuario',$email);

                if(!($emailDb === FALSE)) {

                    //Email ya registrado
                    $this->model->pushData(
                        "alerta",
                        "Error, cuenta de correo electrónico ya registrada."
                    );

                }

                else {
                    //Registrar usuario
                    $user = [
                        'nombre' => $_POST["nombre"],
                        'apellido' => $_POST["apellido"],
                        'email' => $_POST["email"],
                        'contraseña' => $_POST["password"],
                        'ciudad' => $_POST["ciudad"],
                        'estado' => $_POST["estado"],
                        'pais' => $_POST["pais"],
                        'direccion' => $_POST["direccion"],
                        'telefono' => $_POST["telefono"],
                        'tipo' => $_POST["tipo"],
                    ];

                    $result = Usuario::registrar($user);

                    if($result === TRUE) {

                        $login = Usuario::login($_POST);
                        $this->createUserSession($login);

                    }

                }

            }
            else {
                //Contraseña no coinciden
                $this->model->pushData(
                    "alerta",
                    "Error, las contraseñas no coinciden."
                );
            }


        }

    }


    public function eliminar(): void
    {

        $eliminarIsTrue = FALSE;

        if(isset($_POST["eliminar"])) {
            $eliminarIsTrue = $_POST["eliminar"] === "eliminar";
        }

        if(!empty($_POST) && $eliminarIsTrue) {

            $result = Usuario::deleteUser($_SESSION["user"]["id"]);

            if($result === TRUE) {

                session_destroy();
                header( "refresh:3;url=index.php" );
                die("Usuario Eliminado, será redireccionado en unos momentos...");

            }

        }

    }

    public function consultar(): void
    {

        $userInfo = Model::getFromDb('usuario', ['id' => $_SESSION["user"]["id"]]);

        $this->model->pushData(
            "userInfo",
            $userInfo
        );

    }


    public function editar(): void
    {

        if(!empty($_SESSION["user"])) {

            $userInfo = Model::getFromDb('usuario', ['id' => $_SESSION["user"]["id"]]);

            if(!empty($_POST)) {

                $nombre = $_POST["nombre"] ?? NULL;
                $apellido = $_POST["apellido"] ?? NULL;
                $pais = $_POST["pais"] ?? NULL;
                $estado = $_POST["estado"] ?? NULL;
                $ciudad = $_POST["ciudad"] ?? NULL;
                $direccion = $_POST["direccion"] ?? NULL;
                $telefono = $_POST["telefono"] ?? NULL;
                $email = $_POST["email"] ?? NULL;
                $password = $_POST["password"] ?? NULL;
                $password2 = $_POST["password2"] ?? NULL;
                $contraseña = $_POST["contraseña"] ?? NULL;

                if($contraseña !== $userInfo["contraseña"]) {

                    $this->model->pushData(
                        "warning",
                        "Contraseña incorrecta, <a href='?section=usuario&action=editar'> regresar</a>",
                    );

                }

                elseif($password !== $password2) {

                    $this->model->pushData(
                        "warning",
                        "Contraseñas no coinciden, <a href='?section=usuario&action=editar'> regresar</a>",
                    );
                }

                else {
                    //Todo correcto, actualizar

                    $newPass = $contraseña;

                    if($password !== "") {
                        $newPass = $password;
                    }

                    $newUser = [
                        'nombre' => $nombre,
                        'apellido' => $apellido,
                        'email' => $email,
                        'contraseña' => $newPass,
                        'ciudad' => $ciudad,
                        'estado' => $estado,
                        'pais' => $pais,
                        'direccion' => $direccion,
                        'telefono' => $telefono,
                    ];

                    Model::updateFromDb("usuario", $newUser, ["id" => $userInfo["id"]]);

                    $this->model->pushData(
                        "success",
                        "Datos del Usuario Actualizados.",
                    );

                    //Refresh User Info
                    $userInfo = Model::getFromDb('usuario', ['id' => $_SESSION["user"]["id"]]);

                }
            }

            $this->model->pushData(
                "userInfo",
                $userInfo,
            );
        }
        else {
            $this->model->pushData(
                "warning",
                "Área sólo para usuarios",
            );
        }


    }


}