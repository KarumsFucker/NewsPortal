<?php
session_start();
include_once 'inc/Database.php';
require 'model/Category.php';
require 'model/News.php';


include_once 'view/news.php'; //was mistake!!!

include_once 'controller/Controller.php';
include_once 'route/routing.php';

echo $response;
?>