
<?php

include('dblink.php');
session_start();

if(isset($_SESSION['uid']))
{
    header('location:admin/admindash.php');
}
?>
<html lang="en_US">
    <head>
        <meta charset ="UTF-8">
        <title> Admin Login </title>
        
    </head>
    <body>
    <a href="index.php" >search page</a>
        <h1 align="center">Admin Login</h1><br>
        <form action="login.php" method="post">
            
            <table align="center">
                <tr>
                    <td>Username</td><td><input type="text" name="uname" placeholder="Username"required></td>
                </tr>
                <tr>
                    <td>Password</td><td><input type="password" name="pass" placeholder="Password" required></td>
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

if(isset($_POST['login'])){
    
    $username = mysqli_real_escape_string($link,$_POST['uname']);
    $password = mysqli_real_escape_string($link,$_POST['pass']);
    
    $qry = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
    
    
    $run = mysqli_query($link,$qry);
    
    $row = mysqli_num_rows($run);
    ?>

    <?php

    if($row>=1)
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
        
        
        
        $_SESSION['uid']=$id;
        
        header('location:admin/admindash.php');
        
    }
    else
    {
        ?>
        <script>
            alert('Username Or Password Dont match');
            window.open('login.php','_self')
</script>
        <?php
    }
}

?>