<?php
    
    var_dump($_POST);
     $name= $_POST['name'];
    $visitor_email=$_POST['email'];
    $message=$_POST['message']

    $email_from ="agnibha211999@gmail.com ";
    $email_subject='New Subject form submission';

    $email_body="User name: $name. \n" .
                "User Email:$visitor_email. \n" .
                "User Message:$message .\n" .

    $to ="1805457@kiit.ac.in";
    $headers="From:$email_from \r\n";
    $headers .=" Reply-To $visitor_email \r\n"; 

    mail($to,$email_subject,$email_body,$headers);
    header("Location:Contact.html");
?>