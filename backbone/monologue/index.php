<?php

if ($_POST && isset($_POST['text'])) {
    $text = htmlspecialchars(trim($_POST['text']));
    echo json_encode(array('text' => $text));
    die;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <script src="jquery-1.9.1.min.js"></script>
        <script src="main.js"></script>
        <title>Understanding Backbone app</title>
    </head>
    <body>
        <div id="new-status">
            <form method="post">
                <p>
                    <textarea></textarea>
                </p>
                <p>
                    <input type="submit" value="Post" />
                </p>
            </form>
        </div>
        <div id="statuses">
            <ul></ul>
        </div>
    </body>
</html>
