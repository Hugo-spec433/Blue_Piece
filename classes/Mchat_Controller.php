<?php


namespace classes;


class Mchat_Controller extends Controller
{

    public function consultar()
    {
        return $this->model->getAllFromDb("evaluacion");

    }

    public function realizarMCHAT(): string
    {

        $answers = $_POST;
        $totalQuestions = count($answers);
        define("TOTAL_ANSWERS", 21);

        if($totalQuestions === TOTAL_ANSWERS) {

            $mchat = new Mchat();

            $mchat->calculateRisk($answers);

            $mchat->saveInDatabase();

            $id = $_SESSION["insertId"];

            if($mchat == TRUE) {
                $respuesta = "Se completó con éxito el cuestionario M-CHAT, será redireccionado en unos momentos...";
                header( "refresh:3;url=?section=mchat&action=consultar&parameter=$id" );
            }
            else {
                $respuesta = "Error al guardar la información en la base de datos, por favor comuníquese con soporte.";
            }

            return $respuesta;
        }
        return "Error, todas las preguntas son obligatorias.";
    }

    public function consultarGetAction($id)
    {
        $id = ['id' => $id];

        return $this->model->getFromDb("evaluacion", $id);
    }



}