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


}