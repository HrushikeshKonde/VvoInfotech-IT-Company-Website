<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  // * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  //Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'rkonde44@gmail.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( '');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  // /*
  // $contact->smtp = array(
  //   'host' => 'example.com',
  //   'username' => 'example',
  //   'password' => 'pass',
  //   'port' => '587'
  // );
  // */


  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();

  


   // $name = $_POST['name'];
   // $email = $_POST['email'];
   // $subject = $_POST['subject'];
   // $message = $_POST['message'];

   // $email_from = 'VVO INFOTECH LLP';
   // $email_subject = 'New Message From VVO Infotech LLP';
   // $email_body = "Name: $name.\n".
   //               "Email: $email.\n".
   //               "Subject: $subject.\n".
   //               "Message: $message.\n";

   // $to ="rkonde44@gmail.com";
   // $headers = "From: $email_from \r\n";
   // $headers .= "Reply-To: $email \r\n";

   // mail($to,$email_subject,$email_body,$headers);

   // header("location: contact.html");
  


    include('config.php');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];


        $sql="INSERT INTO contact(name,email,subject,message) VALUES(:name,:email,:subject,:message)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':name',$name,PDO::PARAM_STR);
        $query->bindParam(':email',$email,PDO::PARAM_STR);
        $query->bindParam(':subject',$subject,PDO::PARAM_STR);
        $query->bindParam(':message',$message,PDO::PARAM_STR);
        $query->execute();


  // $name = $_POST['name'];
  // $email = $_POST['email'];
  // $subject = $_POST['subject'];
  // $message = $_POST['message'];
  
  // if (!empty($name) || !empty($email) || !empty($subject) || !empty($message)) {
  //   # code...
       
  //       $host = "localhost";
  //       $dbusername = "root";
  //       $dbpassword = "";
  //       $dbname = "vvo infotech";
  // }
  // //Create Connection
  // $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

  // if (mysqli_connect_error()) {
  //    die('Connet Error('. mysqli_connect_errno().')'. mysqli_connect_error());
  //  } else {
  //   $SELECT = "SELECT email From vvo1 Where email = ? Limit 1";
  //   $INSERT = "INSERT Into vvo1 (name, email, subject, message) values(?, ?, ?, ?)";
  
  // $stmt = $conn->prepare($SELECT);
  // $stmt->bind_param("s", $email);
  // $stmt->execute();
  // $stmt->bind_result($email);
  // $stmt->store_result();
  // $rnum = $stmt->num_rows;
  
  // if ($rnum==0){
  //     $stmt->close();

  //     $stmt = $conn->prepare($INSERT);
  //     $stmt->bind_param("ssssii", $name, $email, $subject, $message);
  //     $stmt->execute();
  //     echo "Record Inserted successfully";
  //   } else{
  //     echo "Someone already registered using this email";
  //   }
  //   $stmt->close();
  //   $onn->close();
  //  }
  // } else {
  //   echo "All Field are Required";
  // }


?>
