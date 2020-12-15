<?php
class InvoiceViewShow
{
    public static function render($params)
    {
        ob_start();
        ?>
            <?= Layout::header() ?>
            <pre><?= print_r($params['invoice'], true) ?></pre>
            &copy; 2020 ABC
            <?= Layout::footer() ?>
        <?php
        $html = ob_get_clean();
        return $html;
    }
}
