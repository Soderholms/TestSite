<?php

if (isset($_POST['Skicka'])){
    $name = $_POST['namn'];
    $subject = $_POST['ämne'];
    $mailFrom= $_POST['mail'];
    $message = $_POST['meddelande'];

    $mailTo = "anton.soderholm@icloud.com";
    $headers = "From: ".$mailFrom;
    $txt = "Du har fått en email från ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}