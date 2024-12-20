
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "dvir759@gmail.com"; // Replace with your email
    $subject = "New Booking Request";
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $checkin = htmlspecialchars($_POST['checkin']);
    $checkout = htmlspecialchars($_POST['checkout']);
    $message = htmlspecialchars($_POST['message']);

    $body = "New booking request:\n\nName: $name\nEmail: $email\nPhone: $phone\nCheck-in: $checkin\nCheck-out: $checkout\nMessage: $message";
    $headers = "From: $email\r\nReply-To: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Your booking request has been sent successfully.";
    } else {
        echo "There was an error sending your request. Please try again.";
    }
} else {
    echo "Forbidden";
}
?>
