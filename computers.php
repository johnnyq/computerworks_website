<?php include("includes/header.php"); ?>
<?php
	$dbhost = "localhost";
	$dbusername = "root";
	$dbpassword = "password";
	$database = "computerworkscrm";
	$mysqli = mysqli_connect($dbhost, $dbusername, $dbpassword, $database);
?>

<div class="row">
	<div class="col-md-3">
		<?php include("includes/stock_menu.php"); ?>
	</div>
	<div class="col-md-9">
		<div class="well well-sm">
        	<div class="btn-group">
            	<a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list"></span> List</a> 
            	<a href="#" id="grid" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th"></span> Grid</a>
       		</div>
    	</div>

		<table class="table table-hover">
			<thead>
				<tr>
					<th>Computer</th>
					<th>CPU</th>
					<th>OS</th>
					<th>Price</th>
				</tr>
			</thead>
			<tbody>
		<?php
			$sql = mysqli_query($mysqli,"SELECT * FROM computers WHERE status='stock' ORDER BY computer_id DESC LIMIT 0,50");
			while ($row = mysqli_fetch_array($sql)){
				$type = $row['type'];
				$make = $row['make'];
				$model = $row['model'];
				$processor = $row['processor'];
				$price = $row['price'];
				$os = $row['os'];
		?>
		  <tr>
		  	<td><?php echo "$make $type<br><small class='text-muted'>$model</small>"; ?></td>
		  	<td><?php echo "$processor"; ?></td>
		  	<td><?php echo "$os"; ?></td>
		  	<td><?php echo "$$price"; ?></td>
		  </tr>
		<?php } ?>
		</tbody>
	 </table>
	</div>
</div>

<?php include("includes/footer.php"); ?>
