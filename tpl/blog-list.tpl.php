<?php

include('../controllers/get-posts.php');

if(!empty($postList)) {
	session_start();
	foreach ($postList as $key => $value) {
?>

<div class="blog-post" id="blogPost<?php echo $value[id]; ?>">
	<div class="post-image">
<?php
	    if(array_key_exists("video", $value)) {
?>
	        <iframe width="100%" height="500px" src="<?php echo $value[video]; ?>"></iframe>
<?php	    
	    } elseif(array_key_exists("image", $value)) {
?>
	        <a href="blog-post-page.php?name=<?php echo str_replace(" ", "-", $value[title]) . '&id=' . $value[id]; ?>"><img src="images/blog-posts/<?php echo $value[image]; ?>"></a>
<?php
	    
	    }
?>
	</div>
	<ul class="post-meta">
	    <li class="post-meta-date"><?php echo date('d M, Y' , strtotime($value['date_added'])); ?></li>
	</ul>
	<h2 class="post-title"><?php echo $value[title]; ?></h2>
	<div class="post-author"><?php echo $value[username]; ?></div>
	<div class="post-teaser">
	    <p><?php echo substr($value[description] , 0 , 200); ?></p>
	</div>
	<div class="post-read-more col-md-6"><a href="blog-post-page.php?name=<?php echo str_replace(" ", "-", $value[title]) . '&id=' . $value[id]; ?>" class="btn">Read Post</a></div>
<?php
if(!empty($_SESSION['userid'])) {
?>
	<div class="post-read-more col-md-6"><a onclick = "deletePost(<?php echo $value['id']; ?>)" value="<?php echo $value[id]; ?>" class="btn">Delete Post</a></div>
<?php
}
?>
</div>

<?php
	}
} else {
?>
<p>No Record Found!</p>
<?php
}
?>