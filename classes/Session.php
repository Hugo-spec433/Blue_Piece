<?php


namespace classes;


class Session
{

    public static function sessionHandler()
    {
        //Start PHP Session Handler
        session_start();

        //Session Timeout
        $time = $_SERVER['REQUEST_TIME'];

        //Timeout in Seconds
        $timeout_duration = 18000;

        if (isset($_SESSION['LAST_ACTIVITY']) && ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
            session_unset();
            session_destroy();
            session_start();
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: /");
            die ();
        }

        $_SESSION['LAST_ACTIVITY'] = $time;

        if(!empty($_SESSION["user"])) {
            return $_SESSION["user"];
        }

        return FALSE;
    }
}