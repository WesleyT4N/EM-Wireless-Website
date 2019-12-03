<?php
$title = "Our Services";
$description = "EM Wireless offers iPhone repairs, Samsung Galaxy repairs, and their corresponding accessories and parts.
We also sell refurbished iPhones and Galaxies all for affordable prices.";
include("./includes/header.php");
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
$name = $subj = $msg = "";
$nameErr = $subjErr = $msgErr = "";
?>
<div class="wrapper service-wrapper">
<div class="container-fluid image-slider-container">
    <div class="banner-container">
      <div class="center-block banner service-banner">
        <h1 class="header service-header">Our Services</h1>
        <div class="container-fluid row service-row">
          <div class="container-fluid col-md-6 service-col">
            <div class="column-header-logo">
              <i class="fa fa-usd" aria-hidden="true"></i>
            </div>
            <h2 class="subheader service-subheader">Cell Phone and Accessory Sales</h2>
            <div class="row">
              <div class="col-xs-3 icon-col">
                <img class="section-icon" id="iphone" src="./img/iphone.svg" alt="iphone"/>
              </div>
              <div class="col-xs-9">
                <h2 class="section-subheader">Apple</h2>
                <p class="description">
                  iPhone 5, 5s, 5c
                  <br />
                  iPhone 6, 6 Plus, 6s, 6s Plus
                  <br />
                  iPhone 7, 7 Plus
                </p>
              </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-xs-3 icon-col">
                <img class="section-icon center-block" id="galaxy" src="./img/galaxy.svg" alt="galaxy phone"/>
              </div>
              <div class="col-xs-9">
                <h2 class="section-subheader">Samsung</h2>
                <p class="description">
                  Galaxy S and Note Series.
                </p>
              </div>
            </div>
            <hr>
            <div class="row bottom-row">
              <div class="col-xs-3 icon-col">
                <img class="section-icon center-block" id="dots" src="./img/dots.svg" alt="dots"/>
              </div>
              <div class="col-xs-9">
                <h2 class="section-subheader">Accessories</h2>
                <p class="description">
                  Cell Phone cases, chargers and more!
                </p>
              </div>
            </div>
          </div>
          <div class="container-fluid col-md-6 service-col">
            <div class="column-header-logo">
              <i id="wrench" class="fa fa-wrench" aria-hidden="true"></i>
            </div>
            <h2 class="subheader service-subheader">Cell Phone Repairs and Repair Supplies</h2>
            <div class="row">
              <div class="col-xs-3">
                <img class="section-icon center-block" id="screwdriver" src="./img/screwdriver.svg" alt="screwdriver"/>
              </div>
              <div class="col-xs-9">
                <h2 class="section-subheader">iPhone Repair and <br /> Galaxy Repair</h2>
                <p class="description">
                  Troubleshooting <br /> Screen Replacement <br /> Battery Replacement <br /> Component Replacement
                </p>
              </div>
            </div>
            <hr />
            <div class="row bottom-row">
              <div class="col-xs-3">
                <img class="section-icon center-block" id="gear" src="./img/gear.svg" alt="gear"/>
              </div>
              <div class="col-xs-9">
                <h2 class="section-subheader">DIY Supplies</h2>
                <p class="description">
                  Phone Screens <br /> Logic Boards <br /> Batteries <br /> Camera Modules <br /> Rear Cases <br /> etc.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="./img/camera_img/slider2.jpg" alt="Slider Image 2">
        </div>

        <div class="item">
          <img src="./img/camera_img/slider4.jpg" alt="Slider Image 4">
        </div>

        <div class="item">
          <img src="./img/camera_img/slider6.jpg" alt="Slider Image 6">
        </div>

        <div class="item">
          <img src="./img/camera_img/slider12.jpg" alt="Slider Image 12">
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php include("./includes/footer.php"); ?>
