<?php

include('dblink.php');
$qry = "SELECT * FROM `admin` WHERE `username` = 'anisha' AND `password` = '123'";
echo $qry;

$run = mysqli_query($link,$qry);
    
$row = mysqli_num_rows($run);
echo $row;
?>