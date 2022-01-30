<?php
class Consult extends controller {

function __construct()
{
    parent::__construct();
}

function render(){
    $this->view->render("consult/index");
}


}