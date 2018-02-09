<!DOCTYPE html>
<html lang="en">
<head>
  <title>EM Wireless LLC - <?php echo $title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo $description; ?>"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./css/style.css"/>
  <script src="./js/main.min.js"></script>
  <script src="https://use.fontawesome.com/104d9a8f78.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Raleway" rel="stylesheet">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="theme-color" content="#ffffff">

  <?php require_once "./includes/functions.php"; ?>
</head>

<body>
  <nav class="navbar navbar-default navbar-toggleable-sm">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </button>
      <a href="./" class="navbar-brand">
        <span class="large-logo-part"><i class="fa fa-mobile" aria-hidden="true"></i> EM</span>
        <span class="small-logo-part">Wireless</span>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./services"><i class="fa fa-wrench" aria-hidden="true"></i> Our Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contact"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right hidden-xs">
        <li class="nav-item hidden-sm">
          <a href="https://goo.gl/maps/p8WSP7UfXvu" class="address nav-link">570 Smithfield Avenue<br />Pawtucket, Rhode Island</a>
        </li>
        <li class="nav-item hidden-md hidden-sm">
          <a id="phoneNum" href="tel:4014260226" class="nav-link">(401) 426-0226</a>
        </li>
      </ul>
    </div>
  </nav>
