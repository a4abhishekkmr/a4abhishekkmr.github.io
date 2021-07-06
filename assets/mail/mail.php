<?php
//get data from form  
    $name = $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];

    $email_from='noreply@beabhi.in';

    $email_subject = "New Message from Website";

    $email_body = "Name: $name.\n"."Email: $email.\n". "Message: $message.\n";

    $to ="meramailid2@gmail.com";

    $headers="From : $email_from \r\n";

    $headers .= "Reply-To: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html")

?>