<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bakery Contact Form</title>
    <style>
        body { font-family: Arial, sans-serif; }
        label { display: block; margin-top: 10px; }
        input, textarea { width: 300px; }
        button { margin-top: 15px; }
    </style>
</head>
<body>

<h1>Contact Us</h1>

<form action="process.php" method="post">
    <label>
        First Name:
        <input type="text" name="first_name" required>
    </label>

    <label>
        Last Name:
        <input type="text" name="last_name" required>
    </label>

    <label>
        Email:
        <input type="email" name="email" required>
    </label>

    <label>
        Message:
        <textarea name="message" rows="5" required></textarea>
    </label>

    <button type="submit">Send Message</button>
</form>

</body>
</html>