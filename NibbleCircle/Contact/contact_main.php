<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "akshay@syziggy.com";

# SUBJECT (Subscribe/Remove)
$subject = $_POST['subject'];

# RESULT PAGE
$location = "index.php";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
# SEE ALSO: How to protect a php Email Form using php mail or mb_send_mail against Mail Header Injection
$sender = $recipient;

# MAIL BODY
$body .= "Email: ".$_POST['email']." \n Name: ".$_POST['name']." \n Message: ".$_POST['message']." \n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
?>



