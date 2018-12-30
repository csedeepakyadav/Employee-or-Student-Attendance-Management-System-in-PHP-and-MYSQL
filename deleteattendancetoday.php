<?php


if(isset($_POST['delete'])) {

    $con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
	
date_default_timezone_set('Asia/Kolkata');
	       $date = date("Y-m-d");
           $ThisDate = date("d-m-Y", strtotime($date));
		   
// sql to delete a record

$sql = "DELETE FROM `attendance_taken` WHERE date='$ThisDate'";

if ($con->query($sql) === TRUE) {
   ?>
   <script>
      //window.location = "admin.php";
        if(!alert('attendance deleted successfully.')){window.location = "attendancepanel.php";}
   
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "attendancepanel.php";
          if(!alert('Can not delete attendance.Some error occured')){window.location = "attendancepanel.php";}
   
     </script>
   <?php
   }

$conn->close();

			  }
?>