<!-- resources/views/index.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <style>
    body {
        background-color: #ffffcc;
    }

    .sidebar {
        background-color: #ffffcc;
        width: 200px;
        float: left;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .sidebar li a {
        display: block;
        padding: 10px;
        color: #000000;
        text-decoration: none;
    }

    .sidebar li a:hover {
        background-color: #ffffff;
    }

    .content {
        margin-left: 220px;
        padding: 20px;
    }
    </style>
</head>

<?php
session_start();
if(isset($_GET['x']) && $_GET['x']==='home'){
         $page = "home.php";
            include 'main.php';
           }elseif(isset($_GET['x']) && $_GET['x']==='order'){
            $page = "order.php";
            include 'main.php';
           }elseif(isset($_GET['x']) && $_GET['x']==='user'){
            if($_SESSION['level_inicafe']==1){
              $page = "user.php";
              include 'main.php';
            }else{
              $page = "home.php";
              include 'main.php';
            }
           }elseif(isset($_GET['x']) && $_GET['x']==='report'){
          if($_SESSION['level_inicafe']==1){
            $page = "report.php";
            include 'main.php';
          }else{
            $page = "home.php";
            include 'main.php';
          }
           }elseif(isset($_GET['x']) && $_GET['x']==='customer'){
            $page = "customer.php";
            include 'main.php';
           }elseif(isset($_GET['x']) && $_GET['x']==='menu'){
            $page = "menu.php";
            include 'main.php';
           }elseif(isset($_GET['x']) && $_GET['x']==='login'){
            include 'login.php';
           }elseif(isset($_GET['x']) && $_GET['x']==='logout'){
            include 'proses/proses_logout.php';
           }else{
            $page = "home.php";
            include 'main.php';
           }
           ?>

</html>
