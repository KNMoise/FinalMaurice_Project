<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST["subject"];
  $message = "<html><body>";
  $message .= "<h2>This email is sent from Innovatedtc website by:</h2>";
  $message .= "<ul style='list-style-type: disc; color: #333333;'>"; // Set list style and color
  $message .= "<li><b>Name: </b>" . $name . "</li>";
  $message .= "<li><b>Email: </b>" . $email . "</li>";
  $message .= "</ul>";
  $message .= "<h3>Subject: </h3>";
  $message .= "<p>" . $subject . "</p>"; // Set subject color and bold
  $message .= "<h3>Message:</h3>";
  $message .= "<p>" . $_POST["message"] . "</p>";
  $message .= "</body></html>";


  $mail = new PHPMailer(true);
  try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'innovatedtc@gmail.com';
    $mail->Password = 'hszv vrzj vzga vxxx'; // Replace with your actual password (avoid storing it in code)
    $mail->SMTPSecure = 'TLS';
    $mail->Port = 587;
    $mail->setFrom($email, $name); // Set sender email and name
    $mail->addAddress("mutanaderrick@gmail.com");
    $mail->isHTML(true);
    $mail->Subject = $subject; // Set the subject from the form input
    $mail->Body = $message; // Combine subject and message body for single line display
    $mail->send();
    echo "Email sent successfully!";
  } catch (Exception $e) {
    echo "Email sending failed. Error: {$mail->ErrorInfo}";
  }
}
?>
