<?php

class View{
    function __construct()
    {
        $this->message = "Oops, I did it again.";
    }
    public function render($name){
        require "views/" . $name . ".php";
    }
}