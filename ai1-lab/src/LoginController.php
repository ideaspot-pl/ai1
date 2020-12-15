<?php
require_once __DIR__ . '/../autoload.php';

class LoginController
{
    public static function index()
    {
        echo LoginViewIndex::render();
        return;
    }

    public static function set()
    {
        // tutaj jakaś logika
        print_r($_REQUEST);

        $_SESSION['uid'] = 42;

        die("Tu jest ustawianie sesji");
    }

    public static function logout()
    {
        session_unset();
        session_destroy();
    }
}
