<?php
include('../dblink.php');

if (isset($_REQUEST['sid'])) {
    $id = $_REQUEST['sid'];

    $qry = "DELETE FROM `student` WHERE `id` = '$id'";
    $run = mysqli_query($link, $qry);

    if ($run == true) {

        echo '<script>alert("Data Deleted Successfully");</script>';
    } else {
    
        echo "Error deleting the record.";
    }


    echo '<script>setTimeout(function(){ window.location = "deletestudent.php"; }, 50);</script>';
    exit; 
} else {
   
}
?>

