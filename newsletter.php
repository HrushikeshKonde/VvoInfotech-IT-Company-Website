<?php 

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['subscribe'])){
  
  $email = $_POST['email'];
 
  try{
    $mail->isSMTP();
    $mail->Host = 'mail.vvoinfotech.in';
    $mail->SMTPAuth = true;
    $mail->Username = 'jobs@vvoinfotech.in'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'Jobs@12345'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('jobs@vvoinfotech.in'); // Gmail address which you used as SMTP server
    $mail->addAddress('sales@vvoinfotech.in'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'webmail Join Newsletter';
    $mail->Body = "<h3>Request To Join NewsLetter <br>Email: $email</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}

?>
