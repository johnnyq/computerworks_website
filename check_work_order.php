<?php
//Database Config
$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "password";
$database = "goodwillcomputerworkscrm";
$mysqli = mysqli_connect($dbhost, $dbusername, $dbpassword, $database);

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


if(isset($_GET['work_order_id'])){
	$work_order_id = check_input($_GET['work_order_id']);
}

?>

<?php include("includes/header.php"); ?>

<div class="row">
	<div class="col-md-3">
		<?php include("includes/side_menu.php"); ?>
	</div>
	<div class="col-md-offset-0 col-md-3">
		<form role="form">
		  <div class="form-group">
		    <input type="text" class="form-control input-lg" name="work_order_id" placeholder="Work Order Number" value="<?php if(isset($_GET['work_order_id'])){echo $_GET['work_order_id'];} ?>" >
		  </div>
		  <button type="submit" class="btn btn-primary btn-block btn-lg">Check Status</button>
		</form>
	</div>
	<div class="col-md-5">
		<div class="panel panel-default">
			<div class="panel-heading">Work Order Status</div>
			  <div class="panel-body">
			    <?php 
			    $sql = mysqli_query($mysqli,"SELECT * FROM work_orders, employees WHERE work_orders.take_in_employee = employees.employee_id AND work_order_id = $work_order_id");

					  $num=mysqli_num_rows($sql);
						
					  if($num>0){
					  
					  $row = mysqli_fetch_array($sql);

					  $employee_first_name = $row['employee_first_name'];
					  $take_in_date = date('F d, g:i a', $row['take_in_date']);
					  $work_order_status = $row['work_order_status'];

					  echo "
					  		<p>Takein Date: $take_in_date</p>
					  		<p>Status: $work_order_status</p>
					  		";
					  }else{ 
					  	echo "No Work Order";
					  	} 
				?>

			  </div>
			</div>
	</div>
</div>

<?php include("includes/footer.php"); ?>
