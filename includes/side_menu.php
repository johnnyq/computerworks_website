<ul class="nav nav-pills nav-stacked well well-sm">
	<li <?php if($_SERVER["REQUEST_URI"] == "/index.php") { echo 'class="active"';} ?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
	<li <?php if($_SERVER["REQUEST_URI"] == "/support.php") { echo 'class="active"';} ?>><a href="support.php"><span class="glyphicon glyphicon-question-sign"></span> Support</a></li>
	<li <?php if($_SERVER["REQUEST_URI"] == "/services.php") { echo 'class="active"';} ?>><a href="services.php"><span class="glyphicon glyphicon-wrench"></span> Services</a></li>
	<li <?php if($_SERVER["REQUEST_URI"] == "/location.php") { echo 'class="active"';} ?>><a href="location.php"><span class="glyphicon glyphicon-map-marker"></span> Location</a></li>
	<li <?php if($_SERVER["REQUEST_URI"] == "/contact.php") { echo 'class="active"';} ?>><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>

</ul>
