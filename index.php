<?php
require 'connection.php';
require "router.php";
// $conn = [];

$conn['db'] = (new Database())->db;


session_start();


$router = new routers();

$router->get('/register','controller/registration/register.php')->AuthorCheck('guest');
$router->get("/registration","controller/registration/registration.php")->AuthorCheck('guest');
$router->get('/login','controller/login-view/login.php')->AuthorCheck('guest');
$router->get('/login-logic','controller/login-view/login-logic.php')->AuthorCheck('guest');
$router->get("/","controller/home.php")->AuthorCheck('authentication');
$router->get("/open","controller/open.php")->AuthorCheck('authentication');
$router->post("/insert","controller/insert.php")->AuthorCheck('authentication');
$router->get("/view","controller/view.php")->AuthorCheck('authentication');
$router->get("/pop-up","controller/pop-up.php")->AuthorCheck('authentication');
$router->get("/inserting","controller/inserting.php")->AuthorCheck('authentication');
$router->get("/fetching","controller/fetching.php")->AuthorCheck('authentication');
$router->get("/decription","controller/decription.php")->AuthorCheck('authentication');
$router->get("/update","controller/update.php")->AuthorCheck('authentication');
$router->get("/deleteList","controller/deleteList.php")->AuthorCheck('authentication');
$router->get("/logout","controller/login-view/logout.php")->AuthorCheck('authentication');




require $router->checking();
