<?php
session_start();


echo'<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark " >
<a class="navbar-brand" href="#">ifitness</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto ">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
    </li>

    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      FEATURES
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="contact.php">CARDIO</a>
      <a class="dropdown-item" href="contact.php">HIIT TRAINING</a>
      <a class="dropdown-item" href="contact.php">YOGA</a>
      <a class="dropdown-item" href="contact.php">RESISTANCE TRAINING</a>
      <a class="dropdown-item" href="contact.php">CORE BUILDING</a>
      <a class="dropdown-item" href="contact.php">STRENGTH TRAINING</a>
  </li>';

    echo '<li class="nav-item">
      <a class="nav-link" href="about.php">ABOUT</a>
    </li>
  
    <li class="nav-item">
    <a class="nav-link" href="contact.php">CONTACT US</a>
  </li>
  </ul>

  <div class="row mx-2">';
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  echo '<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" name="search" type="search" actiion="get" placeholder="Search" aria-label="Search">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    welcome user
    <p class="text-light my-0 mx-2">Welcome '. $_SESSION['user_name']. ' </p>   
    
    <a href="partials/logout.php" class="btn btn-outline-success ml-2">Logout</a>
    <button>Logout</button>
    </form>';
  }
else{ 
  echo '<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal">Login</button>
    <button class="btn btn-outline-success mx-2" data-toggle="modal" data-target="#signupModal">Signup</button>';
  }

echo '</div>
 
</div>
</nav>';


include 'partials/loginModal.php';
include 'partials/signupModal.php';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Success!</strong> You can now login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
         }';
}
?>