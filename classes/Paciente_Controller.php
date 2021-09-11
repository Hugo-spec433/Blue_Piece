<?php


namespace classes;


class Paciente_Controller extends Controller
{

    public function paciente(): void
    {

        if(!empty($_SESSION["user"])) {
            $this->patientWord();

            $patientsIds = Model::getAllFromDbWhere("tutor_paciente", ['idTutor' => $_SESSION["user"]["id"]]);

            if($patientsIds) {

                $patients = [];

                foreach ($patientsIds as $patient) {

                    $patientDB = Paciente::getPaciente($patient["idPaciente"]);

                    $patients[$patientDB['id']] = $patientDB;

                }

                $this->model->pushData(
                    "patients",
                    $patients
                );

            }

        }
    }

    public function consultar() {

        $this->patientWord();

    }

    public function consultarGetAction($id)
    {
        $this->patientWord();

        $mchat = Mchat::getFromDbByPatient($id);

        if($mchat) {

            $this->model->pushData(
                "mchat",
                $mchat
            );

        }
        else {

            $this->model->pushData(
                "alerta",
                "Aún no ha realizado ningún cuestionario de MCHAT, <a href='?section=mchat&id=$id'>realizarlo</a>"
            );

        }

        return Paciente::getPaciente($id);
    }

    public function registrar() {

        if(!empty($_SESSION["user"])) {

            $this->patientWord();

            if(!empty($_POST)) {

                $edad = $_POST["edad"] . ' ' . $_POST["tiempo"];

                //Registrar Paciente
                $patient = [
                    'nombre' => $_POST["nombre"],
                    'apellido' => $_POST["apellido"],
                    'edad' => $edad,
                    'sexo' => $_POST["sexo"],
                    'pais' => $_POST["pais"],
                    'estado' => $_POST["estado"],
                    'ciudad' => $_POST["ciudad"],
                    'direccion' => $_POST["direccion"],
                    'telefono' => $_POST["telefono"],
                ];

                $result = Paciente::registrar($patient);

                if($result == TRUE) {

                    header("Location: ?section=paciente");

                }
                else {
                    $this->model->pushData(
                        "alerta",
                        "Error al crear registro, por favor comuníquese con soporte"
                    );
                }

            }

        }




    }

}