<?php
// Sanitize helper function
function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Validate existence
    if (
        empty($_POST["first_name"]) ||
        empty($_POST["last_name"]) ||
        empty($_POST["email"]) ||
        empty($_POST["message"])
    ) {
        die("Error: All fields are required.");
    }

    // Sanitize inputs
    $firstName = clean_input($_POST["first_name"]);
    $lastName  = clean_input($_POST["last_name"]);
    $email     = clean_input($_POST["email"]);
    $message   = clean_input($_POST["message"]);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Invalid email format.");
    }

    // Email setup
    $to = "test@bakery.com"; 
    $subject = "New Contact Form Message";
    $emailMessage = "
        Name: $firstName $lastName\n
        Email: $email\n
        Message:\n$message
    ";
    $headers = "From: $email";

    // Send email 
    mail($to, $subject, $emailMessage, $headers);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Message Sent</title>
</head>
<body>

<h1>Thank You!</h1>

<p>Your message has been sent successfully.</p>

<h3>Confirmation Details:</h3>
<ul>
    <li><strong>First Name:</strong> <?php echo $firstName; ?></li>
    <li><strong>Last Name:</strong> <?php echo $lastName; ?></li>
    <li><strong>Email:</strong> <?php echo $email; ?></li>
    <li><strong>Message:</strong> <?php echo nl2br($message); ?></li>
</ul>

</body>
</html>