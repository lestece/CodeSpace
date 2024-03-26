<?php
# Access session.
session_start() ;
# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Workshop 4</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Italiana&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<style>
	.card{
		margin-bottom: 20px;
	}
 
  .intro {
    background: url(https://plus.unsplash.com/premium_photo-1669500762189-7cc47d910275?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8ODl8fHdhdGNofGVufDB8fDB8fHww);
    width: 100vw;
    height:50vh;
    color: white;
    font-size: 3rem;
    position: relative;
    font-family: "Italiana", sans-serif;
  }

  #span1{
    position: absolute;
    top: 35%;
    left: 3%;
  }

  #span2{
    position: absolute;
    top: 15%;
    left: 33%;
  }

  #span3{
    position: absolute;
    top: 35%;
    left: 63%;
  }
  #span4{
    position: absolute;
    top: 15%;
    right:3%;
  }
</style>
<!-- fontawesome script -->
<script src="https://kit.fontawesome.com/1705e36da1.js" crossorigin="anonymous"></script>

	</head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">WatchIt</i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav float-left">
    <li class="nav-item ">
        <a class="nav-link" href="#"> <i class="fas fa-user"></i> <?php
		echo "{$_SESSION['first_name']} {$_SESSION['last_name']}";
		?></a>
      </li>
    <li class="nav-item ">
        <a class="nav-link" href="cart.php"> <i class="fas fa-shopping-cart"></i> View Shopping Cart<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="logout.php"> <i class="fas fa-sign-out-alt"></i> Log Out<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<div class='intro'>
  <p><span id='span1'>Be</span>
  <span id='span2'>Right</span>
  <span id='span3'>On</span>
  <span id='span4'>Time!</span></p>
  <!-- <img src="https://plus.unsplash.com/premium_photo-1669500762189-7cc47d910275?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8ODl8fHdhdGNofGVufDB8fDB8fHww" alt="intro-img"> -->
</div>
<div class="container">
