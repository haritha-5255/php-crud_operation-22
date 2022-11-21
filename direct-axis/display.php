<?php 	
include 'inc/db.php';
if(isset($_GET['editsuccess']))
{
  ?>
  <script>alert('Data Updated Successfully')</script>
  <?php
}
elseif(isset($_GET['editerror']))
{
?>
  <script>alert('Error Occured .Try Again !!!')</script>
  <?php
}
if(isset($_GET['delid']))
{
  $newdelid=$_GET['delid'];
  $query="DELETE FROM `candidate_table` WHERE `candi_id`=$newdelid";
  $res=mysqli_query($conn,$query);
if($res)
{
  ?>
  <script>alert('Message Deleted Successfully')</script>
  <?php
}
else
{
  ?>
  <script>alert('Error Occured !!!')</script>
  <?php
}
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display list</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
  <!-- card -->
  <div class="card m-3 p-"2>
  <div class="card-header">
    <h3 class="p-1 m-1">Registration form</h3>
  </div>
  

  <!-- card end -->
  <div>
    <table border="1">
        <thead>
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>B'day</th>
            <th>address</th>
            <th>Doc</th>
            <!-- action -->
            <th>Action</th>
</tr>
                
            
        </thead>
        <?php
        require_once 'inc/db.php';

        $sql= "select * from candidate_table where candi_status=1";
        $res=mysqli_query($conn,$sql);
        if($res)
        {
            // while($row=mysqli_fetch_assoc($res))
            while($row=mysqli_fetch_array($res))
            {
                ?>
                <tr>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                    <td><?php echo $row[4];?></td>
                    <td><?php echo $row[5];?></td>
                    <td><?php echo $row[6];?></td>
                    <!-- <td><a href="form_basics.php?id=<?=$row['Id']?>">Edit</a> -->
                    <!-- form basics id pass   -->
                    <td><a href="form_basics.php?id=<?=$row[0]?>">Edit</a>
                    <a onclick="return confirm('Are you sure to delete the record?');" href="display.php?delid=<?= $row[0]?>" title="">Delete</a>

                    
            </tr>
                <!-- <tr>
                    <td><?= $row[1];?></td>
                    <td><?= $row[2];?></td>
                    <td><?= $row[3];?></td>
                    <td><?= $row[4];?></td>
                    
            </tr> -->
                <!-- <tr>
                    <td><?= $row['Name'];?></td>
                    <td><?= $row['Email'];?></td>
                    <td><?= $row['Mobile'];?></td>
                    <td><?= $row['Password'];?></td>
                     -->
            <!-- </tr> -->
                <?php
                }
            }
                else
                {
                    echo "<tr><td clospan=4>No Record Found</td></tr>";
                }
                                     ?>
                </tbody>
                    </table>
            
                    
    <a href="form_basics.php"><strong>&#8592;Back</strong></a>
    
        

  </div>
</div>
</div>
  </div>
</div>
</body>
</html>