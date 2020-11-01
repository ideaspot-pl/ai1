<?php

function highlight($html, $phrase)
{
    return $html;
    // if no phrase - show just $html
    // create pattern
    // use preg_replace to add <mark>
    // return text
}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="container">
    <form method="post">
        <textarea name="content" placeholder="Enter some HTML here!"><?= isset($_REQUEST['content']) ? $_REQUEST['content'] : '' ?></textarea>
        <input type="text" placeholder="Phrase to highlight" name="phrase" value="<?= isset($_REQUEST['phrase']) ? $_REQUEST['phrase'] : '' ?>">
        <button type="submit">Highlight!</button>
    </form>

    <article><?= highlight(isset($_REQUEST['content']) ? $_REQUEST['content'] : '', isset($_REQUEST['phrase']) ? $_REQUEST['phrase'] : '') ?></article>
</div>
</body>
</html>
