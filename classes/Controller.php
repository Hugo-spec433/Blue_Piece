<?php

namespace classes;

class Controller
{
    protected $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function checkLogin() {

        $user = Usuario::login($_POST);

        if($user) {

            $_SESSION["user"] = $user;
            header("Location: ?section=usuario");
            exit;
        }
        else {
            $this->model->pushData("alerta","Usuario o Contraseña Incorrectos");
            return FALSE;
        }

    }


    public function createUserSession($user) {

            $_SESSION["user"] = $user;
            header("Location: ?section=usuario");
            exit;

    }

    public function patientWord(): void
    {
        if (isset($_SESSION["user"])) {
            $user = $_SESSION["user"];
        }

        if (!empty($user)) {
            $patient = "Hijo";
            if ($user["tipo"] !== "Tutor") {

                $patient = "Paciente";

            }

            $this->model->pushData(
                "patient",
                $patient
            );
        }
        else {
            $this->model->pushData(
                "patient",
                "Paciente"
            );
        }
    }


}