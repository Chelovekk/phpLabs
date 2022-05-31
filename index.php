<?php
require "layout/router.php";
include "layout/db.php";
$url = key($_GET);

$router = new Router();
$router->addRoute("/", "main.php");
$router->addRoute("/login", "login.php");
$router->addRoute("/account", "account.php");
$router->addRoute("/info", "info.php");
$router->route("/" . $url);