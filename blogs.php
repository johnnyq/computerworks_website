<?php include("includes/header.php"); ?>
<?php include("includes/config.php"); ?>

<div class="row">
	<div class="col-md-3">
		<?php include("includes/admin_side_menu.php"); ?>
	</div>
	<div class="col-md-8">
		<?php
		if(isset($_GET['delete']))
			{
				$blog_id = isint($_GET['delete']);
			    $sql = "DELETE FROM blog WHERE blog_id = $blog_id";
			    mysqli_query($mysqli,$sql);

			    echo "<div class='alert alert-danger'>Blog has been Deleted.</div>";
			}
		?>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Subject</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
		<?php
			$sql = mysqli_query($mysqli,"SELECT * FROM blog ORDER BY blog_id DESC LIMIT 0,20");
			while ($row = mysqli_fetch_array($sql)){
				$blog_id = $row['blog_id'];
				$subject = $row['subject'];
		?>
		  <tr>
		  	<td><?php echo "$blog_id"; ?></td>
		  	<td><?php echo "$subject"; ?></td>
		  	<td>
		  		<div class='btn-group'>
					<a class="btn btn-default" href="edit_blog.php?blog_id=<?php echo "$blog_id"; ?>"><span class='glyphicon glyphicon-edit'></span></a>
					<a class="btn btn-default" href="?delete=<?php echo "$blog_id"; ?>"><span class='glyphicon glyphicon-trash'></span></a>
				</div>
			</td>
		  </tr>
		<?php } ?>
		</tbody>
	 </table>
	</div>
</div>

<?php include("includes/footer.php"); ?>
