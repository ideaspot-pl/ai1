<?php

class Order
{
    const STATUS_NEW = 1;
    const STATUS_PROCESSING = 2;
    const STATUS_COMPLETE = 3;

    /** @var  int */
    public $status;

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getStatusString()
    {
        switch ($this->getStatus()) {
            case self::STATUS_NEW:
                return "New";
            case self::STATUS_PROCESSING:
                return "Processing";
            case self::STATUS_COMPLETE:
                return "Complete";
            default:
                return "Invalid";
        }
    }

    /**
     * @param int $status
     * @return Order
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}

$order = new Order();

$order->setStatus(Order::STATUS_NEW);
var_dump($order->getStatusString());
// string 'New' (length=3)


$order->setStatus(Order::STATUS_COMPLETE);
var_dump($order->getStatusString());
// string 'Complete' (length=8)
