<?php
if(!empty($_POST["submit"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $message = $_POST["message"];
    $toEmail = $_POST["niiojenma@gmail.com"];

    $mailHeader ="Name: " . $name . 
    "\r\n Email: " . $email . "\r\n Phone: " $tel . 
    "\r\n  Message " . $message . "\r\n"; 

    if(mail($toEmail, $name, $mailHeader)){
        $return ="Thank You!"
    }

}

?>