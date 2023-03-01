<?php
if (isset($_POST['email']) && isset($_POST['message'])) {
  $to = "contact@yassine-dehhani.com";
  $subject = "[PORTFOLIO] New message from " . $_POST['name'];
  $message = $_POST['message'];
  $headers = "From: " . $_POST['email'] . "\r\n" .
             "Reply-To: " . $_POST['email'] . "\r\n" .
             "X-Mailer: PHP/" . phpversion();
  mail($to, $subject, $message, $headers);
  header('Location: thank_you.html');
}
?>
	