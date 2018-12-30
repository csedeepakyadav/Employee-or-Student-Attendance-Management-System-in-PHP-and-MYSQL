<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>

<?php include ("header.php") ?>


<div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Update Employee Details.</h1>
          <br>
		    <a class="a_color" href="admin.php"><button type="button" class="btn btn-primary btn-lg">Admin Dashboard</button></a>
		   <br>
        <div class="col-sm-10">
		
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
        <th>Emp_Id</th>
        <th>Name</th>
        <th>Gender</th>
		<th>Email</th>
		<th>Date of Birth</th>
		<th>Contact No</th>
		<th>Department</th>
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
        echo "";
    }
//select database
$edit_id = @$_GET['edit'];

$sql="SELECT * FROM `employee_details` WHERE id='$edit_id' ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><input type="text" name="name" class="form-control" id="formGroupExampleInput" value="<?php echo $post['name']; ?>" placeholder="name"></td></td>
        <td><input type="text" name="gender" class="form-control" id="formGroupExampleInput" value="<?php echo $post['gender']; ?>" placeholder="name"></td></td>
		<td><input type="text" name="email" class="form-control" id="formGroupExampleInput" value="<?php echo $post['email']; ?>" placeholder="name"></td></td>
		<td><input type="text" name="dateofbirth" class="form-control" id="formGroupExampleInput" value="<?php echo $post['DOB']; ?>" placeholder="name"></td></td>
		<td><input type="text" name="contact_no" class="form-control" id="formGroupExampleInput" value="<?php echo $post['contact_no']; ?>" placeholder="name"></td></td>
		<td><input type="text" name="department" class="form-control" id="formGroupExampleInput" value="<?php echo $post['department']; ?>" placeholder="name"></td></td>
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
        echo "connected successfully";
    }

 // $update_id = $_GET['id'];
  $update_id = @$_GET['edit'];
 
   $name =  $_POST["name"];
   $gender  = $_POST['gender'];
   $email  = $_POST['email'];
   $DOB  = $_POST['dateofbirth'];
   $contact  = $_POST['contact_no'];
   $department = $_POST['department'];
   
 

$sql1 = "UPDATE `employee_details` SET `name`='$name',`gender`='$gender',`email`='$email',`DOB`='$DOB',`contact_no`='$contact',`department`='$department' WHERE id='$update_id'";
 
 if (mysqli_query($conn,$sql1))
  {
    ?>
   <script>
     
	  if(!alert('Employee details updated successfully.')){window.location = "admin.php?view_employee=view_employee";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "admin.php?view_employee=view_employee";
          if(!alert("Can't update Employee details.Some error occured")){window.location = "admin.php?view_employee=view_employee";}
   
     </script>
   <?php
   }
   

 
  
  }

?>

<?php } ?>

<?php include("footer.php"); ?>