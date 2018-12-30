<?php


 if(isset($_POST['submit'])) {

    $con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "connected successfully";
    }

  
  
   $name =  $_POST["name"];
   $gender =  $_POST["gender"];
   $email  = $_POST['email'];
   $DOB  = $_POST["dateofbirth"];
   $Contact_No  = $_POST["contact"];
   $department  = $_POST["department"];



  $sql = "INSERT INTO `employee_details`(`name`, `gender`, `email`, `DOB`, `contact_no`, `department`) VALUES ('$name','$gender','$email','$DOB','$Contact_No','$department')";

  
   

  //$sql = "INSERT INTO `employee` (`name`, `email`, `DOB`, `contact_no`) VALUES ('$name','$email','$DOB','$Contact_No')";


   if (mysqli_query($con,$sql))
  {
     ?>
   <script>
     
	  if(!alert('Employee added successfully.')){window.location = "admin.php?view_employee=view_employee";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "admin.php?view_employee=view_employee";
          if(!alert("Can not add employee. Some error occured")){window.location = "admin.php?view_employee=view_employee";}
   
     </script>
   <?php
   }	 

  
  }

?>