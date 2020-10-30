<?php

session_start();
if (isset($_SESSION) && isset($_SESSION['uid'])) {
    echo "Current user: {$_SESSION['uid']}, session id: " . session_id();
} else {
    echo "No session started.";
}
