<?php
if ($_POST["submit"]) {
    $recipient="henryherrington@gmail.com";
    $subject     = $_POST["subject"];
    $sendername  = $_POST["name"];
    $senderemail = $_POST["email"];
    $message     = $_POST["message"];
    $message = str_replace("\n", "<br>", $message);
    $headers     = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From:' . $sendername . '<' . $senderemail . '>' . "\r\n";
    $mailBody = '' . $message . "<br><br>Sent from hellorobincookies.com";
    if (mail($recipient, $subject, $mailBody, $headers)) {
        header("Location: contact.php");
        exit;
    } else {
        echo "could not send email"; // something wrrong with your server config
    }
}
?>