<?php

ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
     if(isset($_SESSION)) {
         session_star();
     }

     if(!isset($_SESSION['token'])) {
        $_SESSION['token'] = md5(uniqid(mt_rand(),true));
     }

     if(!defined("BASE_PATH")) {
         define("BASE_PATH", "htttp://localhost:3006/Programacion_web/");
         
     }

?