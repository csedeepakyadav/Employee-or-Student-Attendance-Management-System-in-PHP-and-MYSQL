<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>

<?php include ("header.php") ?>


<div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Edit Admin Details</h1>
           <br>
		    <a class="a_color" href="admin.php"><button type="button" class="btn btn-primary btn-lg">Admin Dashboard</button></a>
		   <br>
        <div class="col-sm-10">
		<h4>Note: Password is confidential hence can not be edited here if you want change then <a href="forgetpassword.php">Recover Password</a>.</h4>
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
		<th>Username</th>
      </tr>
    </thead>
    <tbody>
		
  <form action="" method="post">
<?php


//make connection
$con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "connected successfully";
    }
//select database
$edit_id = @$_GET['edit'];

$sql="SELECT * FROM `admin` WHERE id='$edit_id' ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><input type="text" name="name" class="form-control" id="formGroupExampleInput" value="<?php echo $post['name']; ?>" placeholder="name"></td></td>
        <td><input type="text" name="email" class="form-control" id="formGroupExampleInput" value="<?php echo $post['email']; ?>" placeholder="name"></td></td>
		<td><input type="text" name="contact_no" class="form-control" id="formGroupExampleInput" value="<?php echo $post['username']; ?>" placeholder="name"></td></td>
      </tr>
    
   
  
      
        
     
 
    
      
           
      
<?php } ?>    
     </tbody>
    </table>
	<div class="form-group">
    <button type="submit" name="update" value="update">update</button>
  </div>
   </form>
  </div>
</div>

  

<?php
if(isset($_POST['update'])) {

    $conn = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }

 // $update_id = $_GET['id'];
  $update_id = @$_GET['edit'];
 
   $name =  $_POST["name"];
   $email  = $_POST['email'];
   $username  = $_POST['username'];

   
 

$sql1 = "UPDATE `admin` SET `name`='$name',`email`='$email',`username`='$username' WHERE id='$update_id'";
 
 if (mysqli_query($conn,$sql1))
  {
    ?>
   <script>
     
	  if(!alert('Admin details updated successfully.')){window.location = "admin.php?view_admin=view_admin";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "admin.php?view_employee=view_employee";
          if(!alert("Can't update admin details.Some error occured")){window.location = "admin.php?view_admin=view_admin";}
   
     </script>
   <?php
   }
   

 
  
  }

?>

<?php } ?>

<?php include("footer.php"); ?>