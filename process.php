<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "nick_janssen21@hotmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "New Form Submission", $message . ' - ' 'Name: ' $name . 'Phone number: ' . $phone, "From:" . $email);
    
    header('Location: https://www.kelderdeuntjes.be/success.html');
  }