<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "idanpc50@gmail.com";
    $subject = "ליד חדש מהאתר";

    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $firstName = $_POST['first-name'] ?? '';
    $lastName = $_POST['last-name'] ?? '';

    $message = "קיבלת ליד חדש מהאתר:\n\n";
    $message .= "שם פרטי: $firstName\n";
    $message .= "שם משפחה: $lastName\n";
    $message .= "טלפון: $phone\n";
    $message .= "אימייל: $email\n";

    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "ההודעה נשלחה בהצלחה!";
    } else {
        echo "אירעה שגיאה בשליחת ההודעה.";
    }
} else {
    echo "גישה לא תקינה.";
}
?>