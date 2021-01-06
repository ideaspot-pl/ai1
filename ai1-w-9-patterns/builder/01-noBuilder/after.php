<?php
require_once __DIR__ . '/../../common-autoload.php';

// from A to B with subject and body
$email = new Email('a@example.com', 'b@example.com', 'My Subject', 'Macaroon jujubes I love danish donut chocolate bar cake bonbon jelly. I love I love toffee. Cookie pudding danish cheesecake donut.');
$email->printout();

// from A to A with subject and body; BCC to B
$email = new Email('a@example.com', 'a@example.com', 'My Subject', 'Macaroon jujubes I love danish donut chocolate bar cake bonbon jelly. I love I love toffee. Cookie pudding danish cheesecake donut.', null, 'b@example.com');
$email->printout();

// from A to B with subject and body, but reply to C
$email = new Email('a@example.com', 'b@example.com', 'My Subject', 'Macaroon jujubes I love danish donut chocolate bar cake bonbon jelly. I love I love toffee. Cookie pudding danish cheesecake donut.', null, null, 'c@example.com');
$email->printout();

// useful cookiebabble:
// Macaroon jujubes I love danish donut chocolate bar cake bonbon jelly. I love I love toffee. Cookie pudding danish cheesecake donut.
