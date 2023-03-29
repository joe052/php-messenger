<!DOCTYPE html>
<html>

<head>
    <title>Send SMS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post" action="send_sms.php">
        <?php if (!empty($errors)): ?>
            <div class="error">
                <?php foreach ($errors as $error): ?>
                    <p>
                        <?php echo $error; ?>
                    </p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <label for="phone_number">Phone Number</label>
        <input type="text" id="phone_number" name="phone_number" placeholder="Enter phone number...">
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Enter message..."></textarea>
        <input type="submit" value="Send">
    </form>
</body>

</html>