<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>

<?php include ("header.php") ?>


<div class="col-sm-12">
   <h1 class="text-center" >Admin Panel</h1>
</div>

<div class="col-sm-12 jumbo_user"> 
   <h1 class="text-center" >Dashboard</h1>
   <br>
   <a class="a_color" href="logout.php"><button type="button" class="btn btn-primary btn-lg">logout</button></a>

   <a class="a_color" href="attendancepanel.php"><button type="button" class="btn btn-primary btn-lg">Take Attendance</button></a>
   
   <a class="a_color" href="viewattendanceadmin.php"><button type="button" class="btn btn-primary btn-lg">Today's attendance</button></a>
   
   
   <a class="a_color" href="viewattendanceadminfull.php"><button type="button" class="btn btn-primary btn-lg">complete attendance</button></a>
   
   <a class="a_color" href="employee.php?insert_employee=insert_employee"><button type="button" class="btn btn-primary btn-lg">Insert New Employee</button></a>
   
   <a class="a_color" href="insertadmin.php"><button type="button" class="btn btn-primary btn-lg">Insert New Admin</button></a>
   
   
   <a class="a_color" href="employee.php?view_employee=view_employee"><button type="button" class="btn btn-primary btn-lg">View Employee Details</button></a>
   
   <a class="a_color" href="viewadmin?view_admin=view_admin"><button type="button" class="btn btn-primary btn-lg">View Admin Details</button></a>
   
</div>
  

<?php } ?>



<?php include("footer.php") ?>