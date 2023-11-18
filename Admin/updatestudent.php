<?php
session_start();
if(isset($_SESSION['uid']))
{
    echo "";
}
else{
    header('location: ../login.php');
}
  
?>

<?php
include('header.php');


?>

<br><h1 align="center">Update Data Of Students</h1><br>
<table align="center">
<form action="updatestudent.php" method="post">
    <tr>
        <th>
            Enter Standard 
        </th>
        <td>
            <input type="number" name="standard" placeholder="Enter Standard" required="required"/>
        </td>
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
        <th>
            Enter Student Name
        </th>
        <td>
            <input type="text" name="stuname" placeholder="Enter Student Name" />
        </td>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
        <td colspan="2"><input type="submit" name="submit" value="Search"/></td>
    </tr>
    
    
</form>
</table>
<br>

<table align="center" width="80%" border="1" style:"margin-top:10px;">
    <tr style="background-color:#000; color:#fff; ">
        <th>No.</th>
        <th>Image</th>
        <th>Name</th>
        <th>Roll No</th>
        <th>Edit</th>
    </tr>
    
    <?php

    if(isset($_POST['submit'])){
        include('../dblink.php');

        $standard = $_POST['standard'];
        $name=$_POST['stuname'];

        $sql = "SELECT * FROM `student` WHERE `standard`='$standard' AND `name`LIKE '%$name%'"; 

        $run=mysqli_query($link, $sql);

        if(mysqli_num_rows($run)<1){

            echo "<tr><td colspan='5'>No Records Found</td></tr>";
        }
        else{
           
            $count=0;
            while($data=mysqli_fetch_assoc($run)){
                $count++;
                ?>
                <tr align="center">
                    <td><?php echo $count;?></td>
                <?php    if(empty($data['image'])){ ?><td>NA</td><?php }
                else{
                    ?>
                    <td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;"/> </td>
                    <?php } ?>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['rollno']; ?></td>
                    <td><a href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
                </tr>

        <?php
            }
        }
    }
?>
    
</table>

