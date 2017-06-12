<?php
$name = $subj = $msg = "";
$nameErr = $subjErr = $msgErr = "";
$valid = TRUE;
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$subj = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$msg = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

if (empty($name)) {
  $nameErr = "Name is required";
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
  $email = "emwirelessllc@gmail.com";
  $headers = 'From: "Website Customer Message: '.$name.'" <em-wireless.com>'."\r\n";
  if (mail($email, $subj, $msg, $headers)) {
    echo 'success';
  } else {
    echo 'fail';
  }
} else {
  echo 'fail';
}
?>
