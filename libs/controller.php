<?php

class Controller{
    function __construct()
    {
        echo "<p>Base controller</p>";
        $this->view =new View();
    }
}