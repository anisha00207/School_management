<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    #wel{
            padding-left:35%;
        }
        .dashboard a{
text-decoration:none;
color:black;
        }
        </style>
        
</head>
<body>
    

<?php

session_start();
if(isset($_SESSION['uid']))
{
    echo "";
}
else{
    header('location: ../login.php');
}
 

include('header.php');
?>
    
    <h1 id="wel">Welcome To Admin Dashboard</h1>
    <div class="dashboard">
        <table style="width:50%;" align="center" border="2px" >
            <tr>
                <td > 1.</td><td><a href="addstudent.php">Insert Student</a></td>
            </tr>
            <tr>
                
                <td> 2.</td><td><a href="updatestudent.php">Update Student</a></td>
            </tr>
            <tr>
                <td> 3.</td><td><a href="deletestudent.php">Delete Student</a></td>
            </tr>
</div>
</body>
</html>
