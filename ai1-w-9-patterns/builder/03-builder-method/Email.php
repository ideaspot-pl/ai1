<?php

class Email
{
    private $from;
    private $to;
    private $cc;
    private $bcc;
    private $replyTo;
    private $subject;
    private $body;

    public function __construct($from, $to, $subject, $body, $cc = null, $bcc = null, $replyTo = null)
    {
        $this->from = $from;
        $this->to = $to;
        $this->subject = $subject;
        $this->body = $body;
        $this->cc = $cc;
        $this->bcc = $bcc;
        $this->replyTo = $replyTo;
    }

    public function printout()
    {
        echo "From: {$this->from}\n";
        if ($this->replyTo) {
            echo "Reply to: {$this->replyTo}\n";
        }
        echo "To: {$this->to}\n";
        if ($this->cc) {
            echo "CC: {$this->cc}\n";
        }
        if ($this->bcc) {
            echo "BCC: {$this->bcc}\n";
        }
        echo "Subject: {$this->subject}";
        echo "Body:\n{$this->body}\n";
        echo "\n-----------------\n\n";
    }
}
