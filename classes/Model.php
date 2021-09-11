<?php


namespace classes;


class Model
{
    private $data;
    private $template;

    public function __construct(){
        $this->data = [];
        $this->template = "";
    }

    public function pushData($key, $pushData) {
        $this->data[$key] = $pushData;
    }

    public static function insertIntoDb($table, $values) {

        //Start DB Connection
        $conn = new Database();
        $conn -> dbConnect();

        $result = $conn->insertInto($table,$values);

        $conn->dbDisconnect();

        return $result;

    }

    public static function getFromDb($table, $values) {

        //Start DB Connection
        $conn = new Database();
        $conn -> dbConnect();

        $result = $conn->select($table, $values);

        $conn->dbDisconnect();

        return $result;

    }




    public static function deleteFromDb($table, $values) {

        //Start DB Connection
        $conn = new Database();
        $conn -> dbConnect();

        $result = $conn->delete($table, $values);

        $conn->dbDisconnect();

        return $result;

    }


    public static function updateFromDb($table, $values, $where) {

        //Start DB Connection
        $conn = new Database();
        $conn -> dbConnect();

        $result = $conn->update($table, $values, $where);

        $conn->dbDisconnect();

        return $result;

    }

    public static function getAllFromDb($table) {

        //Start DB Connection
        $conn = new Database();
        $conn -> dbConnect();

        $result = $conn->selectAll($table);

        $conn->dbDisconnect();

        return $result;

    }


    public static function getAllFromDbWhere($table, $values) {

        //Start DB Connection
        $conn = new Database();
        $conn -> dbConnect();

        $result = $conn->selectAllWhere($table, $values);

        $conn->dbDisconnect();

        return $result;

    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getTemplate(): string
    {
        return $this->template;
    }

    /**
     * @param string $template
     */
    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }

}