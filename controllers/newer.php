<?php

class Newer extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->view->render("newer/index");
    }

    public function addStudent(){
        $enrollment = $_POST["enrollment"];
        $name = $_POST["name"];
        $lastName = $_POST["lastName"];

        $this->model->insert(["enrollment" => $enrollment, "name"=>$name, "lastName"=>$lastName]);
      echo "Created student";
    }
}