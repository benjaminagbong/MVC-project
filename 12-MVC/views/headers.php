<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
    <!-- css styling -->
    <link rel="stylesheet" type="text/css" href="./style.css">

	<title>Tweeter messenger </title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php ">Tweeter</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="?page=yourTimeline">Your timeline</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=yourTweet">Your tweet</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=publicProfile">Public Profile</a>
      </li>
      
      
    </ul>
    <div class="form-inline my-2 my-lg-0">


      <?php if ($_SESSION['id']) { ?>  
      
      <a  href="?function=logout" class="btn btn-outline-success my-2 my-sm-0">Logout</a>

    <?php } else{ ?>
      <button class="btn btn-outline-success my-2 my-sm-0"  data-toggle="modal" data-target="#exampleModal">Login/Signin</button>
    <?php } ?>


    
    </div>
  </div>
</nav>