<!DOCTYPE html>
<html>
    <head>
        <title>Crosscraft - battle</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>

        <h1>Битва</h1>

        <h2><?php print $word; ?></h2>

        <ul>
            <?php foreach ($clues as $cid => $clue): ?>
                <li><a href="<?php print url('battle/guess/' . $wid . '/' . $cid); ?>"><?php print $clue; ?></a></li>
            <?php endforeach; ?>
        </ul>

    </body>
</html>
