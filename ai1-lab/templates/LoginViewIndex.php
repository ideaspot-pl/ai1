<?php
class LoginViewIndex
{
    public static function render($params = [])
    {
        ob_start();
        ?>
            <?= Layout::header() ?>
            <form method="post" action="index.php?action=login-set">
                <input type="text" name="username">
                <input type="text" name="password">
                <input type="submit" value="wyslij">
            </form>
            <?= Layout::footer() ?>
        <?php
        $html = ob_get_clean();
        return $html;
    }
}
