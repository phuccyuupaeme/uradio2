<?php include 'footer.php';?>

<?php
$name = $_POST['name'];
$email = $_POST['email']
$subject = $_POST['subject'];
$message = ['message'];
$to = "kc2suave.com@domainsbyproxy.com";
$headers = "From: webmaster@example.com" . "\r\n" .

mail($name,$email,$subject,$message,$to,$headers);
?>
