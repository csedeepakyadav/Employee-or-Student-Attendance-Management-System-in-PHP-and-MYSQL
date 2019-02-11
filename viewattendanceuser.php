<?php include("header.php");?>


<div class="container-fluid view_user">

 <div class="col-sm-12">
  <h2 class="text-center">View Attendace</h2>
  <p class="text-center">Enter your EID and submit.</p>
 </div> 
 <div class="col-sm-12 user_form_color">
 
  <form class="form-inline" action="" method="post">
    <div class="form-group">
      <label for="email">EID:</label>
      <input type="text" class="form-control" name="id" placeholder="Enter EID" required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  
 </div>  
</div>



<?php

 if(isset($_POST['id'])) {
	 
//make connection
$con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
	
 ?>	
 <?php 
             $Eid = $_POST['id'];
	          $con = mysqli_connect('localhost','root','','attendance');
              $result = mysqli_query($con,"SELECT * FROM `attendance_taken` WHERE id='$Eid'");
			  $row = mysqli_fetch_array($result);
			  $total = $row[0];
			  $today = strval($total);
              if ($total == 0){
				  ?>
			  <script>
       // window.location = "admin.php?view_employee=view_employee";
          if(!alert("Eid is wrong.Please reconfirm EID then try again ")){window.location = "viewattendanceuser.php";}
   
              </script>	  
			  <?php } 
			  
			  else {
				  ?>
 <div class="container-fluid MT-10" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Attendance can be seen below.</h1>
		   <br>
		    <a class="a_color" href="user.php"><button type="button" class="btn btn-primary btn-lg">User Dashboard</button></a>

		   <br>
<h4 class="text-center">Employee can find there EID here and can use EID to view there attendance</h4>

		
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
        <th>EID</th>
        <th>Name</th>
		<th>Date</th>
		<th>Present/Abscent</th>
      </tr>
    </thead>
    <tbody>
		
 <?php 
//select database
$Eid = $_POST['id'];

$sql="SELECT * FROM `attendance_taken` WHERE id='$Eid' ORDER BY id ASC";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['eid']; ?></td>
        <td><?php echo $post['name']; ?></td>
		<td><?php echo $post['date']; ?></td>
		<td><?php echo $post['attendance']; ?></td>
	   </tr>
              
      
<?php } ?>    
     </tbody>
    </table>
	</div>
   
  <?php } ?>
 
 <?php } ?>



<?php include("footer.php"); ?>
