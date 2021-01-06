<?php
require_once __DIR__ . '/../../common-autoload.php';

// from A to B with subject and body
$builder = new EmailBuilder();
$builder->setFrom('a@example.com')
    ->setTo('b@example.com')
    ->setSubject('My Subject')
    ->setBody('Macaroon jujubes I love danish donut chocolate bar cake bonbon jelly. I love I love toffee. Cookie pudding danish cheesecake donut.');
$email = new Email($builder);
$email->printout();

// from A to A with subject and body; BCC to B
$builder = new EmailBuilder();
$builder->setFrom('a@example.com')
    ->setTo('a@example.com')
    ->setBcc('b@example.com')
    ->setSubject('My Subject')
    ->setBody('Macaroon jujubes I love danish donut chocolate bar cake bonbon jelly. I love I love toffee. Cookie pudding danish cheesecake donut.');
$email = new Email($builder);
$email->printout();

// from A to B with subject and body, but reply to C
$builder = new EmailBuilder();
$builder->setFrom('a@example.com')
    ->setTo('b@example.com')
    ->setBcc('c@example.com')
    ->setSubject('My Subject')
    ->setBody('Macaroon jujubes I love danish donut chocolate bar cake bonbon jelly. I love I love toffee. Cookie pudding danish cheesecake donut.');
$email = new Email($builder);
$email->printout();

// useful cookiebabble:
// Macaroon jujubes I love danish donut chocolate bar cake bonbon jelly. I love I love toffee. Cookie pudding danish cheesecake donut.
