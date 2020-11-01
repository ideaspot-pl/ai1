<?php

$to = "artur@dummy.pl";
$subject = "Test Email Subject";
$content = "This is the test email message content.";
$from = "noreply@dummy.pl";
$headers = "From: $from";
$result = mail($to, $subject, $content, $headers);
var_dump($result);
?>
If you're using Homestead, <a href="http://localhost:8025" target="_blank">check here</a>.
