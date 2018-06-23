<?php
	
	$page_title = "Blog";
	include("header.php");
	include_once('defaults/config.php');
	include("controllers/get-posts.php");

	$result = current($postList);

?>

<main class="page-main">
	<!-- Breadcrumbs Block -->
	<div class="block breadcrumbs">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li><a href="blog-posts-masonry.php">Blog</a></li>
				<li><?php echo $result[title]; ?></li>
			</ul>
		</div>
	</div>
	<!-- //Breadcrumbs Block -->
	<div class="block">
		<h2 class="text-center h-lg h-decor">Blog Post</h2>
		<div class="container">
			<div class="row">
				<div class="col-md-9 aside">
					<div class="blog-post single">
                        <div class="post-image">
<?php
	    					if(array_key_exists("video", $result)) {
?>
	        					<iframe width="100%" height="500px" src="<?php echo $result[video]; ?>"></iframe>
<?php	    
	    					} 
	    					if(array_key_exists("image", $result)) {
?>
	        					<a href="blog-post-page.php?name=<?php echo str_replace(" ", "-", $result[title]) . '&id=' . $result[id]; ?>"><img src="images/blog-posts/<?php echo $result[image]; ?>"></a>
<?php
	    
	    					}
?>
                        </div>
                        <ul class="post-meta">
                            <li class="post-meta-date"><?php echo date('d M, Y' , strtotime($result['date_added'])); ?></li>
                        </ul>
                        <h2 class="post-title"><?php echo  $result['title'] ?></h2>
                        <div class="post-author">by <?php echo  $result['username'] ?></div>
                        <div class="post-content">
                            <p><?php echo nl2br(htmlspecialchars($result['description'])); ?></p>
                        </div>
                    </div>
					<div class="divider divider-lg"></div>
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

<?php
	
	include("footer.php");

?>