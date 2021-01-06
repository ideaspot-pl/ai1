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

    public function __construct(EmailBuilder $builder)
    {
        $this->from = $builder->from;
        $this->to = $builder->to;
        $this->subject = $builder->subject;
        $this->body = $builder->body;
        $this->cc = $builder->cc;
        $this->bcc = $builder->bcc;
        $this->replyTo = $builder->replyTo;
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
