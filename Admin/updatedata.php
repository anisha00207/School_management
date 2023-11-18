<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
</head>
<body>
<?php
$link = mysqli_connect('localhost', 'root', '', 'ms');

if ($link == false) {
    echo "Connection not successful";
}

$rollno = $_POST['rollno'];
$name = $_POST['name'];
$city = $_POST['city'];
$pcon = $_POST['pcon'];
$std = $_POST['standard'];
$imagename = $_FILES['simg']['name'];
$tempname = $_FILES['simg']['tmp_name'];
$id = $_POST['sid'];
move_uploaded_file($tempname, "../dataimg/$imagename");

$qry = "UPDATE `student` SET `name` = '$name', `city` = '$city', `pcon` = '$pcon', `standard` = '$std', `rollno` = '$rollno', `image` = '$imagename' WHERE `id` = $id;";

$run = mysqli_query($link, $qry);

if ($run == true) {
    ?>
    <script>
        alert('Data Updated Successfully');
        setTimeout(function () {
            window.open('updateform.php?sid=<?php echo $id; ?>', '_self');
        }, 50);
    </script>
    <?php
}
?>
</body>
</html>

