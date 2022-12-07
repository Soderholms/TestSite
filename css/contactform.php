<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom= $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "anton.soderholm@icloud.com";
    $headers = "From: ".$mailFrom;
    $txt = "Du har fått en email från ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}
