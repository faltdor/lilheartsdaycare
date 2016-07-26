<?php

if(isset($_POST['email'])) {



  // EDIT THE 2 LINES BELOW AS REQUIRED

  $email_to = "trackmurdera@gmail.com, smart@lilhearts.ca";

  $email_subject = "Lil Hearts Daycare Form Mail";
  $email_from = "Lil Hearts Daycare";




  $fullname = $_POST['fullname']; // required

  $email = $_POST['email']; // required

  $tel = $_POST['tel'];  // required

  $comment = $_POST['comment']; // Not required


  $email_message = "Form details below.\n\n";



  function clean_string($string) { 
    $bad = array("content-type","bcc:","to:","cc:","href"); 
    return str_replace($bad,"",$string); 
  }



  $email_message .= "Full Name: ".clean_string($fullname)."\n";  
  $email_message .= "Email: ".clean_string($email)."\n";
  $email_message .= "Phone: ".clean_string($tel)."\n"; 
  $email_message .= "Comment: ".clean_string($comment)."\n";

  // create email headers 
  $headers = 'From: '.$email_from."\r\n". 
  'Reply-To: '.$email_from."\r\n" . 
  'X-Mailer: PHP/' . phpversion();

  @mail($email_to, $email_subject, $email_message, $headers);  

  ?>

  <!-- include your own success html here -->

  <?PHP include 'success.html'; ?>
  <?php

}

?>
