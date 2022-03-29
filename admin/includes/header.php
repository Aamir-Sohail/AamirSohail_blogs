<?php session_start();

if(!isset($_SESSION['email'])){
    header("Location: index.php");
}

?>
<!doctype html>
<html lang="en">

<head>
  <title>AamirSohail</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          AamirSohail
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="#0">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="add_blog.php">
              <i class="material-icons">dashboard</i>
              <p>Add Blog</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="add_portfolio.php">
              <i class="material-icons">dashboard</i>
              <p>Add Portfolio</p>
            </a>
          </li>  
          <li class="nav-item ">
            <a class="nav-link" href="manage_blog.php">
              <i class="material-icons">dashboard</i>
              <p>Manage Blog</p>
            </a>
          </li>  
          <li class="nav-item ">
            <a class="nav-link" href="manage_portfolio.php">
              <i class="material-icons">dashboard</i>
              <p>Manage Portfolio</p>
            </a>
          </li> 
          <li class="nav-item ">
            <a class="nav-link" href="message.php">
              <i class="material-icons">dashboard</i>
              <p>Manage Messages</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="logout.php">
              <i class="material-icons">dashboard</i>
              <p>Log Out</p>
            </a>
          </li>  
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
        </div>
      </nav>
