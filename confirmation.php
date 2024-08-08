<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation - Sefakor's Dentals</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Sefakor's Dentals</h1>
    </header>

    <section id="confirmation">
        <h2>Appointment Confirmation</h2>
        <p>Thank you for booking an appointment with us. Here are your appointment details:</p>
        <ul>
            <li><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></li>
            <li><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></li>
            <li><strong>Phone:</strong> <?php echo htmlspecialchars($_POST['phone']); ?></li>
            <li><strong>Preferred Date:</strong> <?php echo htmlspecialchars($_POST['date']); ?></li>
            <li><strong>Preferred Time:</strong> <?php echo htmlspecialchars($_POST['time']); ?></li>
            <li><strong>Service:</strong> <?php echo htmlspecialchars($_POST['service']); ?></li>
        </ul>
    </section>

    <footer>
        <p>© 2024 Sefakor's Dentals</p>
    </footer>
</body>
</html>
