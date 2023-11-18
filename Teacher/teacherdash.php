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
if(isset($_SESSION['tid']))
{
    echo "";
}
else{
    header('location: ../teacherlogin.php');
}
 

include('header1.php');
?>
    
    <h1 id="wel">Welcome To staff Dashboard</h1>
    <div class="dashboard">
        <table style="width:50%;" align="center" border="2px" >
            <tr>
                <td > 1.</td><td><a href="classadd.php">Insert Student</a></td>
            </tr>
            <tr>
                
              
</div>
</body>
</html>
