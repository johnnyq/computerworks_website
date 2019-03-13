<?php include("includes/header.php"); ?>
<?php
	$dbhost = "localhost";
	$dbusername = "root";
	$dbpassword = "password";
	$database = "computerworks";

	$mysqli = mysqli_connect($dbhost, $dbusername, $dbpassword, $database);
?>


<div class="row">
	<div class="col-md-3">
		<?php include("includes/side_menu.php"); ?>
	</div>
	<div class="col-md-offset-1 col-md-7">
		<?php
 
			if(isset($_POST['first_name'])) {
			 
			    function died($error) {
			 
			        // your error code can go here
			 		echo "<div class='alert alert-danger'>";
			        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
			        echo "These errors appear below.<br /><br />";
			        echo $error."<br /><br />";
			        echo "Please go back and fix these errors.<br /><br />";
			        echo "</div>";
			        die();
			 
			    }
			 
			    // validation expected data exists
			 
			    if(!isset($_POST['first_name']) ||
			        !isset($_POST['last_name']) ||
			        !isset($_POST['address']) ||
			        !isset($_POST['city']) ||
			        !isset($_POST['state']) ||
			        !isset($_POST['zip']) ||
			        !isset($_POST['phone']) ||
			        !isset($_POST['email'])) {
			        died('We are sorry, but there appears to be a problem with the form you submitted.');       
			    }
			 
			    $first_name = ucwords($_POST['first_name']); // required
			    $last_name = ucwords($_POST['last_name']); // required
			    $address = ucwords($_POST['address']); // required
			    $city = ucwords($_POST['city']); // required
			    $state = strtoupper($_POST['state']); // required
			    $zip = $_POST['zip']; // required
			    $phone = preg_replace("/[^0-9]/", '',$_POST["phone"]); // required
			    $email = strtolower($_POST['email']); // required
			    $time_now = time();
			    $error_message = "";
			    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
			 
			  if(!preg_match($email_exp,$email)) {
			    $error_message .= 'The Email Address you entered does not appear to be valid.<br />'; 
			  } 
			    $string_exp = "/^[A-Za-z .'-]+$/";
			  if(!preg_match($string_exp,$first_name)) {
			    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
			  }
			  if(!preg_match($string_exp,$last_name)) {
			    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
			  }
			  if(strlen($error_message) > 0) {
			    died($error_message);
			  }
			    
			  $sql = "INSERT INTO customers VALUES ('','$time_now','','$last_name','$first_name','$address','$city','$state','$zip','$phone','','$email','','')";
    		  mysqli_query($mysqli,$sql);
			 
		?>
 
		<div class="alert alert-info">Your information has been submitted.</div>
 
		<?php
			}
		?>

		<form class="form-horizontal" method="post">
		  <div class="form-group">
		    <div class="col-md-6">
		    	<input type="text" class="form-control input-lg" name="first_name" placeholder="First Name" required>
		    </div>
		    <div class="col-md-6">	
		    	<input type="text" class="form-control input-lg" name="last_name" placeholder="Last Name" required>
		  	</div>
		  </div>
		  <div class="form-group">
		    <div class="col-md-12">
		    	<input type="text" class="form-control input-lg" name="address" placeholder="Address" required>
		  	</div>
		  </div>
		  <div class="form-group">
		    <div class="col-md-6">
		    	<input type="text" class="form-control input-lg" name="city" placeholder="City" required>
		    </div>
		    <div class="col-md-2">
		   	 	<input type="text" class="form-control input-lg" name="state" placeholder="State" required>
		   	</div>
		    <div class="col-md-4">
		    	<input type="text" class="form-control input-lg" name="zip" placeholder="Zip" required>
		  	</div>
		  </div>
		  <div class="form-group">
		  	<div class="col-md-12">
		  		<input type="text" class="form-control input-lg" name="phone" placeholder="Phone Number">
		  	</div>
		  </div>
		  <div class="form-group">
		    <div class="col-md-12">
		    	<input type="email" class="form-control input-lg" name="email" placeholder="Email">
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
		</form>
	</div>
</div>

<?php include("includes/footer.php"); ?>
