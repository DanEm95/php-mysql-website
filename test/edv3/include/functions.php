<?php
#functions.php

$url = "./index.php";
redirect($url);

#ToDo
function redirect($url) {
    if (!headers_sent()) {
        header('Location: ' . $url);
        exit;
    } else {
        echo '<meta http-equiv="refresh" content="0;url=' . $url . '" />';
        exit;
    }
}