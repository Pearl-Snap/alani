<?php
if(isset($_POST['FormName'])) {
  $to = "jreynoso@gmail.com"; // TODO: update with the recipient we want in production
  $from = $_POST['Email'];
  $first_name = $_POST['FirstName'];
  $last_name = $_POST['LastName'];
  $phone = $_POST['Phone'];
  $role = $_POST['Role'];
  $company = $_POST['Company'];
  $howCanWeHelp = $_POST['HowCanWeHelp'];

  $subject = $_POST['FormName'];
  $message =
    "Form submission\n\n" .
    "First Name: " . $first_name . "\n\n" .
    "Last Name: " . $last_name . "\n\n" .
    "Role: " . $role . "\n\n" .
    "Company: " . $company . "\n\n" .
    "Phone: " . $phone . "\n\n" .
    "Email: " . $from . "\n\n" .
    "How Can We Help: " . $howCanWeHelp;
  $headers = "From:" . $to . "\r\n" . "Reply-To:" . $from;

  if (IsValid($from)) {
    mail($to, $subject, $message, $headers);

    // TODO: show a thank-you modal
    $_POST['FormName'] = null;
    echo "thank you";
  } else {
    // TODO: show error modal
    echo "something's wrong";
  }
}

function IsValid($str) {
  $injections = array('(\n+)', '(\r+)', '(\t+)', '(%0A+)', '(%0D+)', '(%08+)', '(%09+)');

  $inject = join('|', $injections);
  $inject = "/$inject/i";

  return !preg_match($inject, $str);
}

?>