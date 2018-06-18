<?php
	
	$page_title = "Contact";
	include("header.php");

?>

<main class="page-main">
	<!-- Breadcrumbs Block -->
	<div class="block breadcrumbs">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li>Contact Us</li>
			</ul>
		</div>
	</div>
	<!-- //Breadcrumbs Block -->
	<h1 class="text-center h-decor">Contact Us</h1>
	<div class="block fullwidth no-pad">
		<div class="container">
			<div id="googleMap" class="google-map"></div>
		</div>
	</div>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h2>General Office</h2>
					<div class="contact-info-sm">
						<h5>Address</h5>
						<i class="icon icon-map-marker"></i>158 Alderwood Dr.

						<br>Fort Mcmurray, Alberta
					</div>
					<div class="contact-info-sm">
						<h5>Phone 24/7</h5>
					<i class="icon icon-technology"></i>780-972-7266</div>
					<div class="contact-info-sm">
						<h5>Operating Hours</h5>
						<i class="icon icon-clock"></i>Mon-Sun: 8:00 am – 10:00 pm
						
					</div>
					<div class="divider"></div>
					<h5>Look for us on</h5>
					<ul class="social-list">
						<li><a href="https://www.facebook.com/cleanhomesfm"><i class="icon-facebook-logo"></i></a></li>
						<li><a href="https://twitter.com/cleanhomesfm"><i class="icon-twitter-logo"></i></a></li>
						<li><a href="https://www.instagram.com/cleanhomesfm"><i class="icon-instagram-logo"></i></a></li>
					</ul>
				</div>
				<div class="divider visible-sm visible-xs"></div>
				<div class="col-md-8">
					<h2 class="text-center h-lg h-decor">Get in Touch</h2>
					<form class="contact-form" id="contactForm" method="post" novalidate>
						<div class="successform text-center">
							<p>Your message was sent successfully!</p>
						</div>
						<div class="errorform text-center">
							<p>Something went wrong, try refreshing and submitting the form again.</p>
						</div>
						<div class="input-wrapper">
							<input type="text" class="input-custom input-full" name="name" placeholder="Your name*">
						</div>
						<div class="input-wrapper">
							<input type="text" class="input-custom input-full" name="email" placeholder="Email*">
						</div>
						<div class="input-wrapper">
							<textarea class="textarea-custom input-full" name="message" placeholder="Message"></textarea>
						</div>
						<div class="text-center">
							<button type="submit" class="btn">Send Message</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<br /><br /><br />
</main>

<?php
	
	include("footer.php");

?>