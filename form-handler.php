<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  // Email Address where you want to receive the messages
  $to = "mrgdatastu@gmail.com";

  // Subject of the email
  $subject = "New Message from $name";

  // Email body
  $body = "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Phone: $phone\n";
  $body .= "Message:\n$message";

  // Additional headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send email
  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message! We will get back to you soon.";
  } else {
    echo "Oops! Something went wrong and we couldn't send your message.";
  }
}
?>
