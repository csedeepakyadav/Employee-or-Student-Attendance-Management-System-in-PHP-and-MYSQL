

<?php include("header.php"); ?>

 
   <div class="col-sm-8" style="background-color:lavenderblush;">
     <h1>Table goes here</h1>

	
<form  action="" method="POST">
	
	<?php
		//	$numbers= 2;
		//	for($i=1;$i<=$numbers;$i++)
		//	{
		?>
		<?php 
$con = mysqli_connect('localhost','root','','attendance');		
$result = mysqli_query($con,"select count(1) FROM test");
$row = mysqli_fetch_array($result);

$numbers = $row[0];
echo "Total rows: " . $numbers;
?>

<?php
			
			for($i=1;$i<=$numbers;$i++)
			{
		?>
		
 <div class="form-group">
   <label for="formGroupExampleInput">Name:</label>
   <input type="text" name="name[]" class="form-control" id="formGroupExampleInput" placeholder="name">
 </div><!-- -->
<!-- <input type="hidden" value="" name="numbers" /> -->
<input type="hidden" value="<?php echo $numbers;?>" name="numbers" />
 <div class="form-group">
   <label for="formGroupExampleInput">gender:</label>
   <label><input type="checkbox" name="gender[]" value="Male">Male</label>
   <br>
   <label><input type="checkbox" name="gender[]" value="Female">Female</label>
 </div><!-- -->
 
 
			<?php } ?>
  <div class="form-group">
    <button type="submit" name="submit" value="submit">submit</button>
  </div> 

   </form>
   

</div>



<?php

if(isset($_POST['submit'])) {

    $con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }

  
  
  // $name =  $_POST["name"];
   //$gender =  $_POST["gender"];

 
 // $sql = "INSERT INTO `test`(`name`, `gender`) VALUES ('$name','$gender)";
  
  //$sql = "INSERT INTO `test`(`name`, `gender`) VALUES ('$name','$gender)";
  
  $s = "INSERT INTO `test`(`name`, `gender`) VALUES";
	for($i=0;$i<$_POST['numbers'];$i++)
	{
		$s .="('".$_POST['name'][$i]."','".$_POST['gender'][$i]."'),";
	}
	$s = rtrim($s,",");
  


   if (!mysqli_query($con,$s))
  {
     echo "<h1>Not Inserted</h1>";
  }
  else
  { 
    echo "<h1>Inserted</h1>";
  }	 
  
   //for closed
  
  }

?>

<?php include("footer.php"); ?>