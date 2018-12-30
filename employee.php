<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>


<?php include("header.php"); ?>


<?php

if(isset($_GET['insert_employee'])) {

?>   
 <div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Employee Board</h1>
		   <br>
		    <a class="a_color" href="admin.php"><button type="button" class="btn btn-primary btn-lg">Admin Dashboard</button></a>

		   <br>
</div>		   
   <div class="col-sm-10" style="background-color:lavenderblush;">
     <h1>Enter Details of new employee.</h1>

<form  action="insertemployee.php" method="POST">

 <div class="form-group">
   <label for="formGroupExampleInput">Name:</label>
   <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="name">
 </div><!-- -->
 <div class="form-group">
   <label for="formGroupExampleInput">Gender:</label>
   <div class="radio">
      <label><input type="radio" name="gender" value="male" checked>Male</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="gender" value="female">Female</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="gender" value="other">Other</label>
    </div>
 </div>
 <div class="form-group">
   <label for="formGroupExampleInput2">Email:</label>
   <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="name@example.com">
 </div>
 <div class="form-group">
   <label for="formGroupExampleInput2">Date of Birth:</label>
   <input type="text" name="dateofbirth" class="form-control" id="formGroupExampleInput2" placeholder="xx-xx-xxxx">
 </div>
 <div class="form-group">
   <label for="formGroupExampleInput2">Contact No:</label>
   <input type="text" name="contact" class="form-control" id="formGroupExampleInput2" placeholder="Contact Number">
 </div> 
 <div class="form-group">
   <label for="formGroupExampleInput2">Department:</label>
   <input type="text" name="department" class="form-control" id="formGroupExampleInput2" placeholder="CSE , IT...">
 </div> 
 
 
 
  <div class="form-group">
    <button type="submit" name="submit" value="submit">submit</button>
  </div> 

   </form>
   

</div>
<?php } ?>

<!-- employee details -->

<?php


if(isset($_GET['view_employee'])) {

 ?> 

 <div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Employee Board</h1>
		   <br>
		    <a class="a_color" href="admin.php"><button type="button" class="btn btn-primary btn-lg">Admin Dashboard</button></a>

		   <br>
</div>

    <div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Employee Details</h1>

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
		<th>Edit</th>
		<th>Delete</th>
      </tr>
    </thead>
    <tbody>
		

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


$sql="SELECT * FROM `employee_details` ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><?php echo $post['name']; ?></td>
        <td><?php echo $post['gender']; ?></td>
		<td><?php echo $post['email']; ?></td>
		<td><?php echo $post['DOB']; ?></td>
		<td><?php echo $post['contact_no']; ?></td>
		<td><?php echo $post['department']; ?></td>
		<td><a href="editemployee.php?edit=<?php echo $post['id']; ?>">edit</a></td>
		<td><a href="deleteemployee.php?delete=<?php echo $post['id']; ?>">delete</a></td>
      </tr>
    
   
  
      
        
     
 
    
      
           
      
<?php } ?>    
     </tbody>
    </table>
   
  </div>
</div>

<?php } ?>    

<!-- details end -->

<?php } ?>



<?php include("footer.php"); ?>