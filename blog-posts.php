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
		<div class="container">
			<div class="row">
				<div class="col-md-12">
<?php

	if(!empty($_SESSION['userid'])) {
		include('tpl/add-new-post.tpl.php');
	}

?>
				</div>
			</div>
			<h2 class="text-center h-lg h-decor">Blog Posts</h2>
			<div class="row">
				<div class="col-md-9 aside">
					<input type="hidden" id="pageNumber" name="pageNumber" value="1">
					<div id = "postResultBox"></div>
				</div>
				<div class="col-md-3 aside">
					<div class="side-block">
						<h3>Archives</h3>
						<div class="calendar">
							<div class="calendar__header">March 2017</div>
							<table>
								<tr>
									<th>M</th>
									<th>T</th>
									<th>W</th>
									<th>T</th>
									<th>F</th>
									<th>S</th>
									<th>S</th>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td class="selected">1</td>
									<td>2</td>
									<td>3</td>
									<td>4</td>
									<td>5</td>
								</tr>
								<tr>
									<td>6</td>
									<td>7</td>
									<td>8</td>
									<td>9</td>
									<td>10</td>
									<td>11</td>
									<td>12</td>
								</tr>
								<tr>
									<td>13</td>
									<td>14</td>
									<td>15</td>
									<td>16</td>
									<td>17</td>
									<td>18</td>
									<td>19</td>
								</tr>
								<tr>
									<td>20</td>
									<td>21</td>
									<td>22</td>
									<td>23</td>
									<td>24</td>
									<td>25</td>
									<td>26</td>
								</tr>
								<tr>
									<td>27</td>
									<td>28</td>
									<td>29</td>
									<td>30</td>
									<td>31</td>
									<td></td>
									<td></td>
								</tr>
							</table>
							<div class="calendar__footer"><a href="#">« April</a></div>
						</div>
					</div>
					<div class="side-block">
						<h3>Post Categories</h3>
						<ul class="category-list">
							<li><a href="#">Audios  <span>(2)</span></a></li>
							<li><a href="#">Daily Inspiration  <span>(7)</span></a></li>
							<li><a href="#">Freelance  <span>(3)</span></a></li>
							<li><a href="#">Links  <span>(1)</span></a></li>
							<li><a href="#">Mobile  <span>(1)</span></a></li>
							<li><a href="#">Photography  <span>(5)</span></a></li>
							<li><a href="#">Quotes  <span>(1)</span></a></li>
							<li><a href="#">Resources  <span>(3)</span></a></li>
							<li><a href="#">Status  <span>(1)</span></a></li>
						</ul>
					</div>
					<div class="side-block">
						<h3>Popular tags</h3>
						<ul class="tags-list">
							<li><a href="#">Cleaning</a></li>
							<li><a href="#">Service</a></li>
							<li><a href="#">Maid</a></li>
							<li><a href="#">Housekeeping</a></li>
							<li><a href="#">Window Cleaner</a></li>
							<li><a href="#">Online Booking</a></li>
							<li><a href="#">Ovencleaning</a></li>
							<li><a href="#">Maid Service</a></li>
							<li><a href="#">Confinement</a></li>
						</ul>
					</div>
					<div class="side-block">
						<h3>Featured Posts</h3>
						<div class="blog-post post-preview">
							<div class="post-image">
								<a href="blog-post-page.php"><img src="images/blog/blog-post-featured-1.jpg" alt=""></a>
							</div>
							<ul class="post-meta">
								<li class="post-meta-date">16 December, 2017</li>
								<li class="pull-right post-meta-reviews"><i class="icon icon-speech-bubble"></i><span>3</span></li>
							</ul>
							<h4 class="post-title"><a href="blog-post-page.php">New Cleaning With Hydrogen Peroxide</a></h4>
						</div>
						<div class="blog-post post-preview">
							<div class="post-image">
								<a href="blog-post-page.php"><img src="images/blog/blog-post-featured-2.jpg" alt=""></a>
							</div>
							<ul class="post-meta">
								<li class="post-meta-date">16 December, 2017</li>
								<li class="pull-right post-meta-reviews"><i class="icon icon-speech-bubble"></i><span>3</span></li>
							</ul>
							<h4 class="post-title"><a href="blog-post-page.php">A Quick Kitchen-Cleaning Mission for Monday</a></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>


<script src="js/fileUpload.js"></script>
<script src="js/blog.js"></script>

<?php
	
	include("footer.php");

?>