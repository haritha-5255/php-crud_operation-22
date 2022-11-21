<?php 	
include 'inc/db.php';
if(isset($_POST['submitbtn']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];

    $mobile=$_POST['mobile'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    if(isset($_FILES['my_image']))
    {

    
    // image begin
    ?>
    <script>
    console.log("hi");
    </script>
    <?php
    // echo"<pre>";
    // print_r($_FILES['my_image']);
    // echo "<pre>";
    $image_name=$_FILES['my_image']['name'];
    $image_size=$_FILES['my_image']['size'];
    $tmp_name=$_FILES['my_image']['tmp_name'];
    $error=$_FILES['my_image']['error'];
    // if($error===0)
    // {
    //     if($image_size>396000)
    //         {
    //            $em="sorry! your file is too large!!";
    //           header("Location:form_basics.php:error=$em");
    //          }
    //      else{
               $img_ex=pathinfo($image_name,PATHINFO_EXTENSION);
               $img_ex_lc=strtolower($img_ex);
               $allowed_exs=array("jpg","jpeg","png","pdf");

               if(in_array($img_ex_lc,$allowed_exs))

               {

                          $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
                          $img_upload_path = 'uploads/'.$new_img_name;
                          move_uploaded_file($tmp_name,$img_upload_path);

    // doc end
    require_once 'inc/db.php';

	                         $query="INSERT INTO candidate_table(candi_name,candi_mail,candi_mobile,candi_dob,candi_address,candi_doc) VALUES('".$name."','".$email."',$mobile ,$dob,'".$address."','".$image_name."')";

                            $res=mysqli_query($conn,$query);

                          if($res)
                            {  
	                                header("Location:form_basics.php?success=1");
                                    }
                               else
                                  {
                                          header("Location:form_basics.php?error=1");
                                    }
                }
               echo($img_ex);
              }
         //   }
          
      //    }
 
 else{
     $em="Errorr!!!!";
      header("Location:image.php:error=$em");
     }
 
}
            // }
// }

if(isset($_POST['updatebtn']))
{
  $name=$_POST['name'];
	$email=$_POST['email'];

    $mobile=$_POST['mobile'];
    $id=$_POST['form_id'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $new_img=$_FILES['my_image']['name'];
    $old_img=$_POST['my_image_old'];
    if(!$new_image)
    {
      $update_filename=$_FILES['my_image']['name'];
    }
    else{
      $update_filename=$old_img;
    }
    // image update
    $image_name=$_FILES['my_image']['name'];
    $image_size=$_FILES['my_image']['size'];
    $tmp_name=$_FILES['my_image']['tmp_name'];
    $error=$_FILES['my_image']['error'];
    if($error===0)
    {
        // if($image_size>196000)
        //     {
        //        $em="sorry! your file is too large!!";
        //       header("Location:image.php:error=$em");
        //      }
        //  else{
               $img_ex=pathinfo($image_name,PATHINFO_EXTENSION);
               $img_ex_lc=strtolower($img_ex);
               $allowed_exs=array("jpg","jpeg","png","pdf");
               if(in_array($img_ex_lc,$allowed_exs))
               {
                $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
                $img_upload_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name,$img_upload_path);
    // end
$query="UPDATE candidate_table SET candi_name='".$name."',candi_mail='".$email."',candi_mobile='".$mobile."' ,candi_dob=$dob,candi_address='".$address."',candi_doc='".$update_filename."' WHERE candi_id=".$id;

$res=mysqli_query($conn,$query);

if($res)
{  
	header("Location:display.php?editsuccess=1");
}
else
{
  header("Location:display.php?editerror=1");
}
}
         }
        }
        // }

 ?>