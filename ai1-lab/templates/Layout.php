<?php
class Layout
{
    public static function header()
    {
        ob_start();
        ?>
            <html>
            <head>
                <title>Joł</title>
            </head>
            <body>
            <?= self::navbar() ?>
            <?= isset($_SESSION['uid']) && $_SESSION['uid'] ? 'Zalogowany' : 'Wylogowany' ?>
        <?php
        $html = ob_get_clean();
        return $html;
    }

    public static function footer()
    {
        ob_start();
        ?>
            </body>
            </html>
        <?php
        $html = ob_get_clean();
        return $html;
    }

    public static function navbar()
    {
        ob_start();
        ?>
        <nav>
            <ul>
                <li>a</li>
                <li>b</li>
                <li>c</li>
            </ul>
        </nav>
        <?php
        $html = ob_get_clean();
        return $html;
    }

}
