<?php 

session_start();

?>




<?php include("header.php") ?>

<div class ="container-fluid jumbo_login">
	<div class="wrapper">
		<form action="login.php" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control1 form-control inputlogintext" name="username" placeholder="Username" required="" autofocus="" />
			  <br>
			  <input type="password" class="form-control1 form-control inputloginpass" name="password" placeholder="Password" required=""/>     		  
			  <a href="forgetpassword.php">forgot password?</a>	
			  <button class="btn btn-lg btn-primary btn-block"  name="login" value="Login" type="Submit">Login</button>  			
		</form>		
	</div>	
</div>


<?php include("footer.php") ?>

<?php 

//make connection
$con = new mysqli('localhost','root','','attendance');

if ($con->connect_error){
	die("connection error");
}
else{
	echo "";
}

if(isset($_POST['login'])) {
	
     $user_name = $_POST['username'];
     $user_password = $_POST['password'];
	 
	 $encrypt = md5($user_password);
	 
	 $login_query = "SELECT `name`, `password` FROM `admin` WHERE username='$user_name' AND password='$user_password'";
	 
	  $run = mysqli_query($con,$login_query);
	  
	  if(mysqli_num_rows($run)>0) { 
		   
		   $_SESSION['name'] = $user_name;
		   
		   echo "<script>window.open('admin.php','_self')</script>";
	          }
	  else
  		  {
		  echo "<script>alert('Username or password is wrong')</script>";
	       }
	  
   }
	  ?>