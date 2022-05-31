<?php

class Router
{
    private $pages = array();

    function addRoute($url, $path){
        $this->pages[$url] = $path;
    }

    function route($url){
        $path = $this->pages[$url];
        $dir = "pages/".$path;
        if($this->pages[$url]==""){
            require "404.php";
            die();
        }
        if (file_exists($dir)){
            require $dir;
        } else {
            require "404.php";
            die();
        }
    }
}