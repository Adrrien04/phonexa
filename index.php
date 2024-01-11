<?php
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
    exit(); 
  }

  include_once 'view/header.php';
  include_once 'controller/route.php';

  $page = isset($_GET['page']) ? $_GET['page'] : 'accueil';
  getPageContent($page);
?>
