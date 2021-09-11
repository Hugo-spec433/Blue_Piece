<?php


namespace classes;

use mysqli;

class Database extends DbConfig
{
    private $connectionString;
    private $sqlQuery;
    private $dataSet;

    protected $serverName;
    protected $userName;
    protected $dbName;
    protected $password;

    
    function __construct() {
        $this -> connectionString = NULL;
        $this -> sqlQuery = NULL;
        $this -> dataSet = NULL;

        $dbParameters = new Dbconfig();
        $dbParameters -> DBConfig();
        $this -> serverName = $dbParameters -> serverName;
        $this -> userName = $dbParameters -> userName;
        $this -> dbName = $dbParameters -> dbName;
        $this -> password = $dbParameters ->password;

    }

    public function dbConnect() {

        // Create connection
        $this -> connectionString = new mysqli(
            $this -> serverName,
            $this -> userName,
            $this -> password,
            $this -> dbName);

        //Check Connection
        if ($this -> connectionString -> connect_error) {
            die("Error de Conexión: " . $this -> connectionString -> connect_error);
        }

        return $this -> connectionString;
    }


    function dbDisconnect() {
        $this -> connectionString -> close();
    }


    function insertInto($tableName, $values) {

        $columns = "";
        $attributes = "";

        foreach ($values as $key => $value) {
            //Last Element of Array
            if ($key === array_key_last($values)) {
                $columns .= "$key";
                $attributes .= "'$value'";
               // $this -> sqlQuery .= "'$value'";
            }
            else {
                $columns .= "$key, ";
                $attributes .= "'$value', ";
                //$this -> sqlQuery .= "'$value',";
            }

        }

        $this -> sqlQuery = "INSERT INTO $tableName ($columns) VALUES ($attributes)";

        $result = $this -> dataSet = mysqli_query($this -> connectionString, $this -> sqlQuery);

        if($result == TRUE) {
            $_SESSION["insertId"] = mysqli_insert_id($this -> connectionString);
            return $result;
        }
        return FALSE;
    }


    function update($tableName, $values, $where) {

        $columns = "";
        $attributes = "";

        foreach ($values as $key => $value) {
            //Last Element of Array
            if ($key === array_key_last($values)) {
                $columns .= "$key";
                $columns .= " = '$value'";
            }
            else {
                $columns .= "$key";
                $columns .= " = '$value', ";
            }

        }

        $id = $data = NULL;
        foreach ($where as $key => $value) {

            $id = "$key";
            $data = "'$value'";

        }

        $this -> sqlQuery = "UPDATE $tableName SET $columns WHERE $id = $data";

        $result = $this -> dataSet = mysqli_query($this -> connectionString, $this -> sqlQuery);

        if($result == TRUE) {
            return $result;
        }
        return FALSE;
    }


    function select($tableName, $values) {

        $column = $attribute = "";

        foreach ($values as $key => $value) {

                $column = "$key";
                $attribute = "'$value'";

        }

        $this -> sqlQuery = "SELECT * FROM `$tableName` WHERE $column = $attribute ";
        $this -> dataSet = mysqli_query($this -> connectionString, $this -> sqlQuery);
        $result = $this -> dataSet -> fetch_assoc();

        if(!empty($result)) {
            return $result;
        }
        return FALSE;
    }


    function delete($tableName, $values) {

        $column = $attribute = "";

        foreach ($values as $key => $value) {

            $column = "$key";
            $attribute = "'$value'";

        }

        $this -> sqlQuery = "DELETE FROM `$tableName` WHERE $column = $attribute ";
        $this -> dataSet = mysqli_query($this -> connectionString, $this -> sqlQuery);
        $result = $this -> dataSet;

        if(!empty($result)) {
            return $result;
        }
        return FALSE;
    }




    function selectAll($tableName) {

        $this -> sqlQuery = "SELECT * FROM `$tableName`";
        $this -> dataSet = mysqli_query($this -> connectionString, $this -> sqlQuery);
        $result = $this -> dataSet -> fetch_all(MYSQLI_ASSOC);

        if(!empty($result)) {
            return $result;
        }
        return FALSE;
    }


    function selectAllWhere($tableName, $where) {

        $id = $data = NULL;
        foreach ($where as $key => $value) {

            $id = "$key";
            $data = "'$value'";

        }

        $this -> sqlQuery = "SELECT * FROM `$tableName` WHERE $id = $data";


        $this -> dataSet = mysqli_query($this -> connectionString, $this -> sqlQuery);


        $result = $this -> dataSet -> fetch_all(MYSQLI_ASSOC);

        if(!empty($result)) {
            return $result;
        }
        return FALSE;
    }


}