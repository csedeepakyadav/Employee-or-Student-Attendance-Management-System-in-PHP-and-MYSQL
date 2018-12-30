<footer>
  <div class="container">
      <div class="footer-box">
	  <?php 
	        date_default_timezone_set('Asia/Kolkata');
	           $date = date("Y-m-d");
               $newDate = date("d-m-Y", strtotime($date));
      ?>			   
               
        <p>Copyright &copy; 2019 Komal's Project</p>
		<p>Date : <?php echo $newDate;  ?>  </p>
		</div>
  </div>
</footer>
</body>
</html>