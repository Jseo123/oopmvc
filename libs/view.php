<?php

class View{
    function __construct()
    {
        echo "<p>Base view</p>";
    }
    public function render($name){
        require "views/" . $name . ".php";
    }
}