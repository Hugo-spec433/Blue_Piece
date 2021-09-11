<?php

//Classes Auto Loader
require "classes\autoloader.php";

use classes\Autoloader;
use classes\Controller;
use classes\Model;
use classes\Session;
use classes\View;

//Load Classes
Autoloader::register();

//Start PHP Session
$user = Session::sessionHandler();

//Create MVC Object
$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

$isSection = isset($_GET['section']);
//Section Picker
if($isSection) {

    $section = $_GET['section'];

    //Check if Section Exists
    $sectionExists = file_exists("templates/". $section . ".php");

    if($sectionExists) {

        //Initialize Dynamic Classes If Exists
        $modelName = $section . '_Model';
        $modelClass = "classes\\"  . $modelName;
        $controllerClass = "classes\\"  . $section . "_Controller";

        if(file_exists($modelClass . '.php')) {
            require $modelClass . '.php';
        } else {
            $modelClass = FALSE;
        }

        if(file_exists($controllerClass . '.php')) {
            require $controllerClass . '.php';
        } else {
            $controllerClass = FALSE;
        }

        //Create Section MVC Object
        if($modelClass !== FALSE) {
            $model = new $modelClass();
        }
        if($controllerClass !== FALSE) {
            $controller = new $controllerClass($model);
        }


        $view = new View($controller, $model);

        //Controller GET Actions
        $action = FALSE;
        $controllerAction = FALSE;

        if(!empty($_GET['action'])) {
            $controllerAction = $_GET['action'];
        }

        $isAction = isset($controllerAction);

        if ($isAction && !empty($controllerAction) && method_exists($controller, $controllerAction)) {
            $action = TRUE;
        }

        //Controller POST Actions
        $response = FALSE;
        $userInput = $_POST['userInput'] ?? FALSE;
        $methodExists = method_exists($controller, $userInput);

        if (!empty($userInput) && $userInput !== FALSE && $methodExists) {
            $response = $controller->{$userInput}();
        }

        //Load View Template
        if(empty($response) && !$action) {
            //Default View
            if(method_exists($controller,$section)) {
                $controller->{$section}();
            }
            //Main Template
            $model->setTemplate($section  . ".php");

        }

        elseif($action) {

            if(!empty($_GET['parameter'])) {
                $parameter = $_GET["parameter"];
            }

            if(!$response) {

                if(!empty($parameter)) {
                    $data = $controller->{$controllerAction . 'GetAction'}($parameter);
                    $model->setTemplate($section . "-$controllerAction-GetAction"  . ".php");
                }
                else {
                    $data = $controller->{$controllerAction}();

                    $model->setTemplate($section . "-$controllerAction"  . ".php");
                }


                $model->pushData(
                    "data",
                    $data
                );
            }

            else {

                $model->setTemplate($section . "-$controllerAction-$userInput"  . ".php");

                $model->pushData(
                    "response",
                    $response
                );

            }

        }
        else {
            //Response Template
            $model->setTemplate($_GET['section'] . "-" . $_POST['userInput'] . ".php");
            $model->pushData(
                "response",
                $response
            );
        }

    }
    else {
        //Error 404
        $model->setTemplate("error.php");
    }

} else {
    //Index
    $model->setTemplate("index.php");
    $model->pushData(
        "index",
        "TRUE"
    );
}

$model->pushData(
    "user",
    $user
);

//Print View
echo $view->output();
