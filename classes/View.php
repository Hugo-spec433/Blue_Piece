<?php

namespace classes;

class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) {

        $this->controller = $controller;
        $this->model = $model;

    }

    public function output() {
        $data = $this->model->getData();
        extract($data);
        require "templates/header.php";
        require "templates/" . $this->model->getTemplate();
        require "templates/footer.php";
        return NULL;
    }
}