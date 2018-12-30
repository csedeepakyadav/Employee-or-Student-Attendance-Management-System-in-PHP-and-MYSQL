<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>

<?php include ("header.php") ?>

     <?php 
	      date_default_timezone_set('Asia/Kolkata');
	       $date = date("Y-m-d");
           $ThisDate = date("d-m-Y", strtotime($date));
      ?>
	  
	  
	  
<div class="col-sm-12" style="background-color:#78d8db;"> 

      <h1 class="text-center" >Attendance Panel</h1>
  <br>
   <a href="logout.php"><button type="button" class="btn btn-primary btn-lg">logout</button></a>

   <a href="admin.php"><button type="button" class="btn btn-primary btn-lg">Dashboard</button></a>

</div>  
  



    <!-- Checking if attendance is taken for today -->
         <?php 
	          $con = mysqli_connect('localhost','root','','attendance');
              $result = mysqli_query($con,"SELECT `date` FROM `attendance_taken` WHERE date = '$ThisDate'");
			  $row = mysqli_fetch_array($result);
			  $total = $row[0];
			  $today = strval($total);
              if ($total == $ThisDate){
				  ?> 
  				  <h3 class="text-center">Attandace for Taday (<?php echo $ThisDate;  ?>) has been taken.</h3>
				  <h4 class="text-center">View Today's attendance <a href="viewattendanceadmin.php">here</a>.</h4>
				   <br>
				  <h3 class="text-center">If you want to take attendance or update then 
				  
				  <form action="deleteattendancetoday.php" method="post">
				    <input type="submit" name="delete" value="delete"> previous attendace of today and retake</h3>
				  </form>
				  <?php
				 // echo $total;
			 }
			  else{

            ?>
			<div class="col-sm-12">
              <h4 class="text-center">Attandace Can Be Taken Only One time For a Date </h4>  
               <br>   
               <h3 class="text-center">Today is : <?php echo $ThisDate;  ?></h3>
  
            </div>
			
			
			<?php 
	          $con = mysqli_connect('localhost','root','','attendance');
              $result = mysqli_query($con,"select count(1) FROM employee_details");
              $row = mysqli_fetch_array($result);

              $total = $row[0];

             ?>
			 
			 
<div class="fluid-container">

<table class="table table-striped">
    <thead>
      <tr>
        <th>Emp_Id</th>
        <th>Name</th>
        <th class="present_color">Present</th>
        <th>Absent</th>
      </tr>
    </thead>
    <tbody>
	
	<form action="insertattendance.php" method="post">
	
	
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
   
   <form action="insertattendance.php" method="post">
   
   <input type="hidden" value="<?php echo $total;?>" name="numbers" />
   <input type="hidden" value="<?php echo $post['id'];?>" name="eid[]" />
   <input type="hidden" value="<?php echo $post['name'];?>" name="name[]" />
      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><?php echo $post['name']; ?></td>
        <td><label><input type="checkbox" name="attendance[]" value="Present">Present</label></td>
        <td><label><input type="checkbox" name="attendance[]" value="Abscent">Abscent</label></td>
      </tr>

<!-- function for today's date -->	  
   <?php     
     date_default_timezone_set('Asia/Kolkata');
	           $date = date("Y-m-d");
               $ThisDate = date("d-m-Y", strtotime($date));
     ?>
	 
	 <input type="hidden" value="<?php echo $ThisDate;?>" name="date[]" />
      
   
      
<?php } ?>    <!-- while ended here -->

    
 
     </tbody>
    </table>
   <div class="form-group">
    <button type="submit" name="submit" value="submit">submit</button>
  </div>
 </form> 
  </div>
		  <?php } ?> <!-- else Ended here -->




 <?php } ?> <!-- session Ended here -->
<?php include ("footer.php"); ?>