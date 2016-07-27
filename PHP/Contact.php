<?php
      if(isset($_POST["name"]))
      {
        $name=$_POST["name"];
      }
      if(isset($_POST["email"]))
      {
        $email=$_POST["email"];
      }
      if(isset($_POST["subject"]))
      {
        $subject=$_POST["subject"];
      }
      if(isset($_POST["message"]))
      {
        $message=$_POST["message"];
      }
      if(isset($_REQUEST["submit"]))
      {
      $headers = "From: " . $name . " <" . $email . ">\r\n" . "Reply-To: " . $email . "\r\n";
      $result=mail("sinisa.bubonja@gmail.com", $subject, $message, $headers);
    }
 ?>
