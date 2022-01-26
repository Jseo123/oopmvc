<?php
          require_once "controllers/errors.php";
class App{
    function __construct()
    {
      echo "<p>new app</p>" ;
      $url = $_GET["url"];
      $url = rtrim($url, "/");
      $url = explode("/", $url);

      $filecontroller = "controllers/" . $url[0] . ".php";
      if(file_exists($filecontroller)){
        require_once $filecontroller;
        $controller = new $url[0];

if(isset($url[1])){
  $controller->{$url[1]}();
}

      } else {
$controller = new Errors();
      }
    }
}