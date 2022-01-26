<?php
//require_once "./libs/controller.php";
class Errors extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render("error/index");
     // echo "<p>Failed to load resource.</p>" ;
    }
}