<?php include("includes/header.php"); ?>
<?php include("includes/config.php"); ?>
<div class="row">
	<div class="col-md-3">
		<?php include("includes/admin_side_menu.php"); ?>
	</div>
	<div class="col-md-offset-1 col-md-6">
		<?php
			function check_input($value)
			{
			// Stripslashes
			if (get_magic_quotes_gpc())
			  {
			  $value = stripslashes($value);
			  }
			// Quote if not a number
			if (!is_numeric($value))
			  {
			  $value = mysqli_real_escape_string($mysqli,$value);
			  }
			return $value;
			}

			if(isset($_POST['subject']))
			{
				$subject = check_input($_POST['subject']);
				$body = check_input($_POST['body']);

			    $sql = "INSERT INTO blog VALUES('','$subject','$body')";
			    
			    mysqli_query($mysqli,$sql);

			    echo "<div class='alert alert-info'>Your Blog has been Posted.</div>";
			}
		?>
		<form method="post">
		  <div class="form-group">
		    <input type="text" class="form-control input-lg" name="subject" placeholder="Subject" required>
		  </div>
		  <div class="form-group">
		    <textarea rows="8" class="form-control input-lg" name="body" placeholder="Body" required></textarea>
		   </div>
		  <button type="submit" class="btn btn-primary btn-block btn-lg">Post!</button>
		</form>
	</div>
</div>

<?php include("includes/footer.php"); ?>