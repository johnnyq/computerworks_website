<?php include("includes/header.php"); ?>
<?php include("includes/config.php"); ?>

<?php 
  $blog_id = isint($_GET['blog_id']);
  $sql = mysqli_query($mysqli,"SELECT * FROM blog WHERE blog_id='$blog_id' LIMIT 1");
  $row = mysqli_fetch_array($sql);
  $subject = $row['subject'];
  $body = $row['body'];
?>

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
				$blog_id = check_input($_POST['blog_id']);
				$subject = check_input($_POST['subject']);
				$body = check_input($_POST['body']);

			    $sql = "UPDATE blog SET subject = '$subject', body = '$body' WHERE blog_id = $blog_id";
			    
			    mysqli_query($mysqli,$sql);

			    echo "<div class='alert alert-info'>Your Blog has been Edited.</div>";
			}
		?>
		<form method="post">
		  <input type="hidden" name="blog_id" value="<?php echo "$blog_id"; ?>">
		  <div class="form-group">
		    <input type="text" class="form-control input-lg" name="subject" placeholder="Subject" value="<?php echo "$subject"; ?>" required>
		  </div>
		  <div class="form-group">
		    <textarea rows="8" class="form-control input-lg" name="body" placeholder="Body" required><?php echo "$body"; ?></textarea>
		   </div>
		  <button type="submit" class="btn btn-primary btn-block btn-lg">Update!</button>
		</form>
	</div>
</div>

<?php include("includes/footer.php"); ?>