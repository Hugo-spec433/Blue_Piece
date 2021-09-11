<?php


namespace classes;


class DbConfig
{
    protected $serverName;
    protected $userName;
    protected $password;
    protected $dbName;

    function DBConfig() {
        //Database Connection Info
        $this -> serverName = "localhost";
        $this -> userName = "root";
        $this -> password = "";
        $this -> dbName = "bluepiece";
    }

}