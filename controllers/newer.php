<?php

class Newer extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->view->render("newer/index");
    }

    public function addStudent(){
      echo "Created student";
      $this->model->insert();
    }
}