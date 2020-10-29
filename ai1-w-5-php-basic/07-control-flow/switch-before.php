<?php

$status = 'completed';

if ($status == 'new') {
    $statusString = 'Order just received!';
} elseif ($status == 'in progress') {
    $statusString = "We are working on your order.";
} elseif ($status == "completed") {
    $statusString = "This order is completed.";
} else {
    $statusString = "Invalid order status.";
}

echo $statusString;
