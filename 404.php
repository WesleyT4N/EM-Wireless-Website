<?php
  $title = "Page Not Found";
  include("./includes/header.php");
?>
<div class="wrapper">
<div class="container-fluid image-slider-container">
    <div class="banner-container">
      <div class="center-block banner">
        <h1 class="header">Sorry, Page Not Found</h1> <br />
        <a class="header-link" href="./">Go Back to Home</a>
      </div>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="./img/camera_img/slider1.jpg" alt="Slider Image 1">
        </div>

        <div class="item">
          <img src="./img/camera_img/slider5.jpg" alt="Slider Image 5">
        </div>

        <div class="item">
          <img src="./img/camera_img/slider7.jpg" alt="Slider Image 7">
        </div>

        <div class="item">
          <img src="./img/camera_img/slider9.jpg" alt="Slider Image 9">
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php include("./includes/footer.php"); ?>
