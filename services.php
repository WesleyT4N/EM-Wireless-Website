<?php include("./includes/header.php");
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
          <div class="container-fluid col-md-4 service-col">
            <div class="column-header-logo">
              <i class="fa fa-usd" aria-hidden="true"></i>
            </div>
            <h2 class="subheader service-subheader">Smartphone Sales</h2>
            <div class="row phone-row">
              <img src="./img/galaxy.svg" alt="Galaxy phone icon">
            </div>
          </div>
          <div class="container-fluid col-md-4 service-col">
            <div class="column-header-logo">
              <i id="wrench" class="fa fa-wrench" aria-hidden="true"></i>
            </div>
            <h2 class="subheader service-subheader">Smartphone Repairs</h2>
          </div>
          <div class="container-fluid col-md-4 service-col">
            <div class="column-header-logo">
              <i class="fa fa-cog" aria-hidden="true"></i>
            </div>
            <h2 class="subheader service-subheader">DIY Smartphone Supplies</h2>
          </div>

        </div>
      </div>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="https://unsplash.it/960/540?image=816&blur" alt="Los Angeles">
        </div>

        <div class="item">
          <img src="https://unsplash.it/960/540?image=816&blur" alt="Los Angeles">
        </div>

        <div class="item">
          <img src="https://unsplash.it/960/540?image=816&blur" alt="Los Angeles">
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php include("./includes/footer.php"); ?>
