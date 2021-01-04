<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailfrom = $_POST['email'];
    $subject = $_POST['subject'];

    $mailto = "2022akande@gmail.com";
    $headers = "From: ".$mailfrom;
    $text = "You have an email from ".$name. ".\n\n".$subject;

    mail($mailto, $headers, $text );
    header("Location: index.html?mailsend");
    

}
?>
