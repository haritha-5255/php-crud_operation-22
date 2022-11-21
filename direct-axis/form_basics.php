
<?php 	
include 'inc/db.php';
if(isset($_GET['success']))
{
	?>
	<script>alert('Message Sent Successfully')</script>
	<?php
}
elseif(isset($_GET['error']))
{
?>
	<script>alert('Error Occured .Try Again !!!')</script>
	<?php
}
if(isset($_GET['id']))
{
  $new_id=$_GET['id'];
$sql="select * from candidate_table where candi_status=1 AND candi_id=$new_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$name=$row['candi_name'];
$email=$row['candi_mail'];
$mobile=$row['candi_mobile'];
$dob=$row['candi_dob'];
$address=$row['candi_address'];
$document=$row['candi_doc'];
}

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form1_crud</title>
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
    
        <form class="p-1 m-2 bg-light txt-info" action="process.php" method="post" enctype="multipart/form-data">
        <div class="form-group row">
          <!--  -->
          <input type="hidden" name="form_id"  value="<?php if(isset($new_id)) echo $new_id; ?>">
          <!--  -->
    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text"  name="name" title="We ask for your name only for further process ."placeholder="name" value="<?php
if(isset($name))
echo $name;?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text"   name="email"  title="give your email-id."placeholder="xxxx@gmail.com" value="<?php
if(isset($email))
echo $email;?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Mobile</label>
    <div class="col-sm-10">
      <input type="text"  name="mobile"  placeholder="mobile" value="<?php
if(isset($mobile))
echo $mobile;?>">
    </div>
  </div>
  <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">B'day</label>
  <div class="col-sm-10">
  <input class="form-control" id="date" name="dob" placeholder="DD/MM/YYYY" type="date" value="<?php
if(isset($dob))
echo $dob;?>">
    </div>
  </div>
  <!-- address -->
  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
    <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="3">
<?php if(isset($address))
echo $address;?></textarea>
    </div>
  </div>
  <!-- address -->
  <!-- doc -->
  <div class="form-group row ml-1">
  <label class="" class="col-sm-2 col-form-label" for="customFile">Upload</label>
    <div class="col-sm-10 ml-2">
    <input type="file" class="form-control ml-3 p-1" name="my_image" id= "exampleFormControlTextarea1">

    <input type="hidden" class="form-control" name="my_image_old" id="exampleFormControlTextarea1" value="<?php if(isset($document)) echo $document; ?> ">
    </div>
  </div>
  <!-- end -->
 
  <div class="form-group row m-4 p-2">
    
    <div class="col-sm-10">
    <?php
    // id get from display.php
            if(isset($_GET['id']))
{
  ?>
    <button type="submit" class="btn btn-light btn-round px-5" name="updatebtn"> Update</button>
  <?php
}
else
{
  ?>
 <a href="display.php"><strong><span class="m-2 p-2">&#8592;list</span></strong></a>
  <button type="submit" class="btn btn-light btn-round px-5" name="submitbtn"> Submit</button>
  <?php
}
?>
      <!-- <input type="submit" name="submitbtn"> -->
    </div>
  </div>
</form> 

  </div>
</div>
</div>
  </div>
</div>

</body>
</html>