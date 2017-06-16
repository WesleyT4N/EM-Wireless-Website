<?php include("./includes/header.php");
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
$name = $subj = $msg = "";
$nameErr = $subjErr = $msgErr = "";
 ?>
<div class="contact-wrapper">
<div class="container-fluid image-slider-container">
  <div class="contact-container">
  <div class="center-block contact-banner">
    <h1 class="contact-header">How to Contact Us</h1> <br />
    <h3 class="subheader contact-phone-number"><a href="tel:4014260226">
      <i class="fa fa-phone-square" aria-hidden="true"></i> (401) 426-0226</strong></a></h3>
      <h3 class="subheader"><a href="https://www.facebook.com/emwirelessllc/"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></h3>
      <hr class="contact-divider" />
      <form id="contactForm" class="center-block contact-form" action="" method="post">
        <h2 class="subheader contact-form-header"><i class="fa fa-envelope-o" aria-hidden="true"></i> Send Us a Message</h2>
        <div class="row first-row">
          <div class="col-sm-6">
            <div class="form-input-group split-group">
              <label class="input-label" id="nameLabel">Name <span class="error-message" id="nameError"></span></label>
              <input type="text" id="name" name="name" class="form-input name-input" autocomplete="off" required/>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-input-group split-group">
              <label class="input-label" id="emailLabel">Email <span class="error-message" id="emailError"></span></label>
              <input type="email" id="email" name="email" class="form-input email-input" autocomplete="off" required/>
            </div>
          </div>
        </div>
        <div class="form-input-group">
          <label class="input-label" id="subjectLabel">Subject <span class="error-message" id="subjectError"></span></label>
          <input type="text" id="subject" name="subject" class="form-input subject-input" autocomplete="off" required/>
        </div>
        <div class="form-input-group">
          <label class="input-label" id="messageLabel">Message <span class="error-message" id="messsageError"></span></label>
          <textarea name="message" class="form-input message-input" id="message" rows="1" required></textarea>
        </div>
        <button id="submit" type="submit" value="submit" name="submit" class="btn form-submit-btn">Send</input>
      </form>
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
<?php include("./includes/footer.php"); ?>
