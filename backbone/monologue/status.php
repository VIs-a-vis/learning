<?php

header('Content-Type: application/json');

if (isset($_POST['text'])) {
    $text = htmlspecialchars(trim($_POST['text']));
    echo json_encode(array('text' => $text));
} else {
    echo file_get_contents('php://input');
}

die;
