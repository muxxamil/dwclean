<?php
	
	$page_title = "Blog";
	include("header.php");

?>

<link href="css/fileUpload.css" rel="stylesheet">

<main class="page-main">
	<!-- Breadcrumbs Block -->
	<div class="block breadcrumbs">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li>Blog Post</li>
			</ul>
		</div>
	</div>
	<!-- //Breadcrumbs Block -->
	<div class="block">
		<h2 class="text-center h-lg h-decor">Blog Posts</h2>
		<div class="container">
<?php

	if(!empty($_SESSION['userid'])) {
		include('tpl/add-new-post.tpl.php');
	}

?>
			<div class="blog-isotope">
				<input type="hidden" id="pageNumber" name="pageNumber" value="1">
				<div id = "postResultBox"></div>
			</div>
		</div>
	</div>
</main>

<script src="js/fileUpload.js"></script>
<script src="js/blog.js"></script>

<?php
	
	include("footer.php");

?>