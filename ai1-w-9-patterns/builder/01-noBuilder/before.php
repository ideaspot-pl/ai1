<?php
require_once __DIR__ . '/../../common-autoload.php';

// from A to B with subject and body
$email = new Email();
$email->printout();

// from A to A with subject and body; BCC to B
$email = new Email();
$email->printout();

// from A to B with subject and body, but reply to C
$email = new Email();
$email->printout();

// useful cookiebabble:
// Macaroon jujubes I love danish donut chocolate bar cake bonbon jelly. I love I love toffee. Cookie pudding danish cheesecake donut.
