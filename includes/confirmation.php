

<?php

session_start();
// check if there is a message set in the session variable
if(isset($_SESSION['message'])){
    // get the message
    $message = $_SESSION['message'];
    // clear message so that it does not show again
    unset($_SESSION['message']);
}else{
    $message = "No message to display";
}
// redirect user to the home page after 5 seconds
header("refresh: 5; url = ../index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form submission confirmation message</title>
</head>
<body>
    <!-- display the message -->
    <h2><?php echo $message; ?></h2>

   
</body>
</html>