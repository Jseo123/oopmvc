<?php
class Consult extends controller {

function __construct()
{
    parent::__construct();
    $this->view->data = [];
}

function render(){
    $students = $this->model->get();
    $this->view->students = $students;
    $this->view->render("consult/index");
}

function seeStudent($param = null){
$studentId = $param[0];
$student = $this->model->getById($studentId);
$this->view->student = $student;
$this->view->message = "";
$this->view->render("consult/details");
}

function updateStudent(){

}

function deleteStudent(){

}
}