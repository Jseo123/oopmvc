<?php

class Newer extends controller {

    function __construct()
    {
        parent::__construct();
        $this->view->render("newer/index");
    }
}