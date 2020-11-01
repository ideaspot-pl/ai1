<?php

function highlight($html, $phrase)
{
    if (empty($phrase)) {
        return $html;
    }

    $pattern = "/(${phrase})/i";
    $highlightedHtml = preg_replace($pattern, '<mark>$1</mark>', $html);

    return $highlightedHtml;
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
