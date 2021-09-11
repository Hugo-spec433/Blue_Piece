<?php


namespace classes;


class Mchat
{

    protected $result;
    protected $risk;


    public function __construct(){
        $this->result = 0;
    }

    public function saveInDatabase() {

        if(!empty($_SESSION["user"]) && isset($_GET["id"]) && !empty($_GET["id"])) {

            $values = [
                "resultado" => $this->result,
                "riesgo" => $this->risk,
                "idUsuario" => $_SESSION["user"]["id"],
                "idPaciente" => $_GET["id"],
            ];

            return Model::insertIntoDb("evaluacion", $values);

        }

        return FALSE;

    }

    public function calculateRisk($answers): int
    {
        //MCHAT Algorithm
        $mchatResult = 0;
        foreach ($answers as $answer => $value) {
            //Quetions 2, 5 AND 12 "TRUE" indicates risk
            if($answer === "dos" || $answer === "cinco" || $answer === "doce") {

                if($value === "TRUE") {
                    $mchatResult++;
                }

            }
            //Everything else, "FALSE" indicates risk
            else if($value === "FALSE") {
                $mchatResult++;
            }
        }

        if($mchatResult >= 8) {

            $this->risk = "Alto";

        }
        else if($mchatResult >= 3) {

            $this->risk = "Medio";

        }
        else {
            $this->risk = "Bajo";
        }

        $this->result = $mchatResult;

        return $mchatResult;

    }

    function getFromDatabase($id) {

        $values = [
            "id" => $id,
        ];

        return Model::getFromDb("evaluacion", $values);

    }


    public static function getFromDbByPatient($id) {

        $values = [
            "idPaciente" => $id,
        ];

        return Model::getAllFromDbWhere("evaluacion", $values);

    }



}