<?php

class Newer extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->view->message = "";
    }

function render(){
    $this->view->render("newer/index");
}

    public function addStudent(){
        $enrollment = $_POST["enrollment"];
        $name = $_POST["name"];
        $lastName = $_POST["lastName"];
        $message = "";

       if( $this->model->insert(["enrollment" => $enrollment, "name"=>$name, "lastName"=>$lastName])){
        $message = "Created student";
       } else {
$message = "enrollmet number already exists";
       }
       $this->view->message = $message;
$this->render();
    }
}