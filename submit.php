
<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailfrom = $_POST['name'];
    $message = $_POST['message'];

    $mailTo = "kc2suave.com@domainsbyproxy.com";
    $headers = "From: ".$mailfrom;
    $txt = "You have received an email form ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: indext.php?mailsend")
    ?>

}
