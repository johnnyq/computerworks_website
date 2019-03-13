<?php include("includes/header.php"); ?>
<?php include("includes/config.php"); ?>

<div class="row">
	<div class="col-md-3">
		<?php include("includes/side_menu.php"); ?>
	</div>
	<div class="col-md-9">
		<?php
			$sql = mysqli_query($mysqli,"SELECT * FROM blog ORDER BY blog_id DESC LIMIT 0,20");
			while ($row = mysqli_fetch_array($sql)){
				$blog_id = $row['blog_id'];
				$subject = $row['subject'];
				$body = $row['body'];
		  ?>
		  <div class="panel panel-default">
		  	<div class="panel-heading">
		   	 <h3 class="panel-title"><?php echo "$subject"; ?></h3>
		  	</div>
		  <div class="panel-body">
		    <?php echo "$body"; ?>
		  </div>
		</div>
		<?php } ?>
	</div>
</div>

<?php include("includes/footer.php"); ?>
