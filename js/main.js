// Main js file
$('.carousel').carousel();

$(document).ready(function() {
  $('.form-input').focus(function(){
    var label = $(this).prev();
    $(label).addClass("animate-label");
    $(this).addClass("selected-input");
  });

  $('.form-input').blur(function(){
    var label = $(this).prev();
    if ($(this).val() === "") {
      $(label).removeClass("animate-label");
      $(this).removeClass("selected-input");
    }
  });

  var defaultHeight = $('.message-input').height();
  var origImgSliderHeight = $('.image-slider').height();
  $('.message-input').focus(function() {
    $(this).height('160px');
    $('.spacer').css('height', "300px");
    $(this).addClass("expanded-message-input");
  });

  $('.message-input').blur(function() {
    if ($(this).val() === "") {
      $(this).height(defaultHeight);
      $('.spacer').css('height', "0");
      $(this).removeClass("expanded-message-input");
    }
  });

  $('#contactForm').on('submit', function(e) {
    e.preventDefault();
    if (validateContactForm()) {
      $.ajax({
        type: "POST",
        url: "/includes/contactFormValidate.php",
        data: $('#contactForm').serialize(),
        success: function(data) {
          if (data === "fail") {
            $('#submit').addClass('error-btn');
            $('#submit').html('<i class="fa fa-times" aria-hidden="true"></i> Error. Something went wrong');
          } else  {
            $('#submit').fadeOut(function(){
              $('#submit').addClass('sent-btn');
              $('#submit').prop('disabled', true);
              $('#submit').html('<i class="fa fa-check" aria-hidden="true"></i> Sent');
              $('#submit').fadeIn();
            });
          }
        },
        error: function(xhr, status, error) {
          console.log(xhr);
          console.log(status);
          console.log(error);
        }
      });
    }
  });
});


function validateContactForm() {
  var name = $('#name').val();
  var valid = true;
  if (name.length > 30) {
    $('#nameError').text("Name too long");
    valid = false;
  } else if (!/^[\w \-']+$/.test(name)) {
    $('#nameError').text("Invalid character in name");
    valid = false;
  } else {
    $('#nameError').text("");
  }

  var email = $('#email').val();
  if (email.length < 5) {
    $('#emailError').text("Invalid Email");
    valid = false;
  } else if (!/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)) {
    $('#emailError').text("Invalid Email");
    valid = false;
  } else {
    $('#emailError').text("");
  }

  var subject = $('#subject').val();
  if (subject.length > 50) {
    $('#subjectError').text("Subject too long");
    valid = false;
  } else if (!/^[\w \-'?+$#@!&(),.:"]+$/.test(subject)) {
    $('#subjectError').text("Invalid character in subject");
    valid = false;
  } else {
    $('#subjectError').text("");
  }

  var message = $("#message").val();
  if (message.length > 300) {
    $('#messageError').text("Message too long");
    valid = false;
  } else {
    $('#messageError').text("");
  }

  if (valid == false) {
    return false;
  } else {
    return true;
  }
}
