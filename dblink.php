<?php
$link = mysqli_connect('localhost', 'root', '', 'ms');

if ($link === false) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($link, "utf8");
?>