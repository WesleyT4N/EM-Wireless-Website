<?php
$name = $subj = $email = $msg = "";
$nameErr = $emailErr = $subjErr = $msgErr = "";
$valid = TRUE;
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$subj = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$msg = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

if (empty($name)) {
  $nameErr = "Name is required";
  $valid = FALSE;
}
if (empty($email)) {
  $emailErr = "Email is required";
  $valid = FALSE;
}
if (empty($subj)) {
  $subjErr = "Subject is required";
  $valid = FALSE;
}
if (empty($msg)) {
  $msgErr = "Message is required";
  $valid = FALSE;
}

if ($valid) {
  $siteEmail = "emwirelessllc@gmail.com";
  $headers = 'From: "Website Customer Message: '.$name.' - '.$email.'" <em-wireless.com>'."\r\n";
  if (mail($siteEmail, $subj, $msg, $headers)) {
    echo 'success';
  } else {
    echo 'fail';
  }
} else {
  echo 'fail';
}
?>
