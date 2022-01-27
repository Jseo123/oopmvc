<?php
class Consult extends controller {

function __construct()
{
    parent::__construct();
    $this->view->render("consult/index");
}
}