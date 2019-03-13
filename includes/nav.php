<div class="navbar navbar-default navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li <?php if($_SERVER["REQUEST_URI"] == "/index.php") { echo 'class="active"';} ?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li <?php if($_SERVER["REQUEST_URI"] == "/services.php") { echo 'class="active"';} ?>><a href="services.php"><span class="glyphicon glyphicon-wrench"></span> Services</a></li>
        <li <?php if($_SERVER["REQUEST_URI"] == "/computers.php") { echo 'class="active"';} ?>><a href="computers.php"><span class="glyphicon glyphicon-th"></span> Stock</a></li>
        <li <?php if($_SERVER["REQUEST_URI"] == "/location.php") { echo 'class="active"';} ?>><a href="location.php"><span class="glyphicon glyphicon-map-marker"></span> Location</a></li>
        <li <?php if($_SERVER["REQUEST_URI"] == "/contact.php") { echo 'class="active"';} ?>><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>