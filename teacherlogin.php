<?php
include('dblink.php');
session_start();

if (isset($_SESSION['tid'])) {
    header('location:teacher/teacherdash.php');
}
?>
<html lang="en_US">
<head>
    <meta charset="UTF-8">
    <title> Staff Login </title>
</head>
<body>
    <a href="index.php">Search Page</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <a href="login.php">Admin Login</a>
    <h1 align="center">Staff Login</h1><br>
    <form action="teacherlogin.php" method="post">
        <table align="center">
            <tr>
                <td>Username</td><td><input type="text" name="uname" placeholder="Username" required></td>
            </tr>
            <tr>
                <td>Password</td><td><input type="password" name="pass" placeholder="Password" required></td>
            </tr>
            <tr>
                <td>Class</td><td><input type="number" name="class" placeholder="Class" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
include('dblink.php');

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($link, $_POST['uname']);
    $password = mysqli_real_escape_string($link, $_POST['pass']);
    $class = mysqli_real_escape_string($link, $_POST['class']);

    $qry = "SELECT * FROM `teacher` WHERE `name` = '$username' AND `password`  = '$password' AND  `class`  = '$class'";
    $run = mysqli_query($link, $qry);
    $row = mysqli_num_rows($run);

    if ($row >= 1) {
        $data = mysqli_fetch_assoc($run);
        $idd = $data['idd'];

    
        $_SESSION['class'] = $class;
        $_SESSION['tid'] = $idd;

        header('location:teacher/teacherdash.php');
    } else {
        ?>
        <script>
            alert('invalid credentials');
            window.open('teacherlogin.php', '_self');
        </script>
        <?php
    }
}
?>
