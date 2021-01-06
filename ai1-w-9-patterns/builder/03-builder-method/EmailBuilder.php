<?php

class EmailBuilder
{
    public $from;
    public $to;
    public $cc;
    public $bcc;
    public $replyTo;
    public $subject;
    public $body;

    /**
     * @param mixed $from
     * @return EmailBuilder
     */
    public function setFrom($from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @param mixed $to
     * @return EmailBuilder
     */
    public function setTo($to)
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @param mixed $cc
     * @return EmailBuilder
     */
    public function setCc($cc)
    {
        $this->cc = $cc;
        return $this;
    }

    /**
     * @param mixed $bcc
     * @return EmailBuilder
     */
    public function setBcc($bcc)
    {
        $this->bcc = $bcc;
        return $this;
    }

    /**
     * @param mixed $replyTo
     * @return EmailBuilder
     */
    public function setReplyTo($replyTo)
    {
        $this->replyTo = $replyTo;
        return $this;
    }

    /**
     * @param mixed $subject
     * @return EmailBuilder
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @param mixed $body
     * @return EmailBuilder
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public function build()
    {
        return new Email($this->from, $this->to, $this->subject, $this->body, $this->cc, $this->bcc, $this->replyTo);
    }
}
