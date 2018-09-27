<?php
if($_POST["message"]) {
    mail("nwilkinson8815@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>
<!doctype html>