<ul class="nav nav-pills nav-stacked well well-sm">
	<h4 class="panel-heading">Admin Menu</h4>
	<li <?php if($_SERVER["REQUEST_URI"] == "/new_blog.php") { echo 'class="active"';} ?>><a href="new_blog.php"><span class="glyphicon glyphicon-plus"></span> New Blog</a></li>
	<li <?php if($_SERVER["REQUEST_URI"] == "/blogs.php") { echo 'class="active"';} ?>><a href="blogs.php"><span class="glyphicon glyphicon-comment"></span> Blogs</a></li>
	<li><a href="index.php"><span class="glyphicon glyphicon-th"></span> Main Menu</a></li>
</ul>