<?php
      if(isset($_POST['submit'])) {

      
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $message = $_POST['message'];

      $to_email_address = "contact@mphtechnic.com";
      $sender_email= $_POST['email'];
      $subject = "New email from website";
      $headers = "From: " . $sender_email;
      $body = "You have received a message from ". $name.".\n\n".$message.".\n\n Contact info: " . $phone;
    
      mail($to_email_address, $subject, $body, $headers); 
   
         header('Location: ../../index.html');
   }
?>

