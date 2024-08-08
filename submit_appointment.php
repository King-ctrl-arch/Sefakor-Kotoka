<?php
// Capture the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$service = $_POST['service'];

// Optionally, you can process the data here (e.g., save to a database)

// Redirect to the confirmation page
header("Location: confirmation.php?name=$name&email=$email&phone=$phone&date=$date&time=$time&service=$service");
exit();
?>
