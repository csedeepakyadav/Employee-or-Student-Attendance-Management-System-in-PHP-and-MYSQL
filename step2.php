
<?php 

if(isset($_GET['step2'])) { 

?>


<?php include("header.php"); ?>

<div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Password Recovery</h1>
		   <br>

</div>	
<div class ="container-fluid jumbo_login">
	<div class="wrapper">
		<form action="" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Step 2:</h3>
			  <hr class="colorgraph"><br>
			  <label>Email</label>
			  <input type="text" class="form-control1 form-control inputlogintext" name="email" placeholder="emai" required="" autofocus="" />
			  <br>
			  <label>Password:</label>
			  <input type="text" class="form-control1 form-control inputlogintext" name="password" placeholder="password" required="" autofocus="" />
			  <br>
			  <label>Confirm Password:</label>
			  <input type="text" class="form-control1 form-control inputloginpass" name="confirm_password" placeholder="confirm Password" required=""/>  <br>   		  
			  <button class="btn btn-lg btn-primary btn-block"  name="change_password" value="change_password" type="Submit">Reset Password</button>  			
		</form>		
	</div>	
</div>



<?php 
if(isset($_POST['change_password'])){

//make connection
$con = new mysqli('localhost','root','','attendance');

if ($con->connect_error){
	die("connection error");
}
else{
	echo "";
}

     $email = $_POST['email'];
     $password = $_POST['password'];
     $confirm_password = $_POST['confirm_password'];

	 $result = mysqli_query($con,"SELECT `email` FROM `admin` WHERE email = '$email'");
     $row = mysqli_fetch_array($result);
	 $total = $row[0];
	 $email_check = strval($total);
	 
	 
	 if($password != $confirm_password){
		 ?>
   <script>
     
	  if(!alert('password not matching.')){window.location = "";}
   </script>
   <?php
       }
	   
    elseif ($email != $email_check){
		?>
   <script>
     
	  if(!alert('wrong email.')){window.location = "";}
   </script>
   <?php
       }
	   
	   else {
	          
			  $sql = "UPDATE `admin` SET `password`= '$password' WHERE email='$email'";
	 
	  
	  
	 if (mysqli_query($con,$sql))
  {
     ?>
   <script>
     
	  if(!alert('password changed successfully.')){window.location = "login.php";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "admin.php?view_employee=view_employee";
          if(!alert("some error occured.")){window.location = "login.php";}
   
     </script>
   
   <?php 
       } 
		  
	       }
   ?>

 <?php } ?>
 
 <?php include("footer.php"); ?>
<?php } ?>



