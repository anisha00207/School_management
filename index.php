<!--http://localhost:8080/student_management/index.php !-->
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>Student Management System</title>
    <style>
        .nav{
        background-color: lightblue;
        width:100%;
        height:130px;
       
    
        }
       
      .logins{
        display:flex;
      }
        
        </style>
</head>
<body>
 
    <div class="nav">
        <div class="logins">
    <h3  align="right"><a href="login.php">Admin Login</a></h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <h3  align="right"><a href="teacherlogin.php">staff Login</a></h3>
    </div>

    <h1 align="center">Welcome To : School Management System</h1>
    </div>

<h3 align="center"><a href="index.php">Student Information</a></h3>
    <form method="post" action="index.php">
    <table style="width:20%;" align="center">
    <tr>
   <td align ="center" class="btn"style="height:50%"> <input type="submit" align="center" name="sub" value="Show all" ></td>
    </tr>
   
        <table style="width:40%; height:20%" align="center" border="7">
            <h3 align="center">OR</h3>
            
            <tr>
                <td align="center">Choose Standard</td>
                <td >
                    <select name="std" >
                    <option value="1" width="30%">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                            <option value="5">5th</option>
                            <option value="6">6th</option>
                            <option value="7">7th</option>
                            <option value="8">8th</option>
                            <option value="9">9th</option>
                            <option value="10">10th</option>
                            <option value="11">11th</option>
                            <option value="12">12th</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="center"> Choose Rollno</td>
                <td><input type="number" name="rollno"><i>*only numbers</i></td>
            </tr>
            <tr>
             
                <td colspan="2"  class="btn" align="center"><input type="submit" name="submit" value="Show Info"></td>
               
    
     
            </tr>

        </table>
    </form>
    
</body>
</html>





<?php



if (isset($_POST['submit'])) {
    $standard = $_POST['std'];
    $rollno = $_POST['rollno'];

    include('dblink.php');
    include('function.php');

    showdetails($standard, $rollno);
}

if (isset($_POST['sub'])) {
    $standard = null;
    $rollno = null;

    include('dblink.php');
    include('function.php');

    showdetails($standard, $rollno);
}
?>







