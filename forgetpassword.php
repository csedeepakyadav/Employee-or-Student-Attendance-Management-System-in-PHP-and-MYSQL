

<?php include("header.php"); ?>

<div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Password Recovery</h1>
		   <br>

</div>	
<div class ="container-fluid jumbo_login">
	<div class="wrapper">
		<form action="" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Step 1:</h3>
			  <hr class="colorgraph"><br>
			  <label>Username:</label>
			  <input type="text" class="form-control1 form-control inputlogintext" name="username" placeholder="Username" required="" autofocus="" />
			  <br>
			  <label>Email:</label>
			  <input type="text" class="form-control1 form-control inputloginpass" name="email" placeholder="Email" required=""/>  <br>   		  
			  <button class="btn btn-lg btn-primary btn-block"  name="step1" value="Reset" type="Submit">Reset Password</button>  			
		</form>		
	</div>	
</div>




<?php 

if(isset($_POST['step1'])) {

?>

<?php 
//make connection
$con = new mysqli('localhost','root','','attendance');

if ($con->connect_error){
	die("connection error");
}
else{
	echo "";
}


	
     $user_name = $_POST['username'];
     $email = $_POST['email'];
	 

	 $query = "SELECT `name`, `email` FROM `admin` WHERE username='$user_name' AND email='$email'";
	 
	 
	  

	   if (mysqli_query($con,$query))
      {
    
	 echo "<script>window.open('step2.php?step2=step2','_self')</script>";
  
       } 
   else {
    ?>
     <script>
       // window.location = "admin.php?view_employee=view_employee";
          if(!alert("username or password incorrect.try again")){window.location = "forgetpassword.php";}
   
     </script>
   <?php
   }	
      
//		   echo "<script>window.open('admin.php','_self')</script>";
	//          }
//	  else
  //		  {
	//	  echo "<script>alert('Username or password is wrong')</script>";
	//       }
	  
   
	  
?>

<?php } ?>
<?php include("footer.php") ?>

