<?php

class Main extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render("main/index");
        echo "<p>New main Controller</p>";
    }

    public function hello(){
        echo "You said hello";
    }
}