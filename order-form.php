<?php
	
	$page_title = "Order";
	include("header.php");

?>

<main class="page-main">
	<!-- Breadcrumbs Block -->
	<div class="block breadcrumbs">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index-2.php">Home</a></li>
				<li>Order Form</li>
			</ul>
		</div>
	</div>
	<!-- //Breadcrumbs Block -->
	<div class="block">
		<h2 class="text-center h-lg h-decor">Order Form</h2>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>Sorry for interruption, this page is in development phase. <span id="countdown"></span></h3>
				</div>
				
			</div>

<script type="text/javascript">
	// Set the date we're counting down to
var countDownDate = new Date("Jun 30, 2018 23:59:59").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
<?php
			/*<div class="row">
				<div class="col-lg-8">
					<div class="order-form-box">
						<form id="orderForm" method="post" novalidate>
							<h3>Book your cleaning service in 60 seconds</h3>
							<div class="divider-line"></div>
							<div class="successform text-center">
								<p>Your message was sent successfully!</p>
							</div>
							<div class="errorform text-center">
								<p>Something went wrong, try refreshing and submitting the form again.</p>
							</div>
							<h6>Contact Information</h6>
							<p>This information will be used to contact you about your service.</p>
							<div class="row">
								<div class="col-sm-6">
									<input type="text" class="input-custom input-custom--sm input-full" name="name" placeholder="Your name*">
								</div>
								<div class="col-sm-6">
									<input type="text" class="input-custom input-custom--sm input-full" name="address" placeholder="Your address*">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<input type="text" class="input-custom input-custom--sm input-full" name="phone" placeholder="Phone number*">
								</div>
								<div class="col-sm-6">
									<input type="text" class="input-custom input-custom--sm input-full" name="email" placeholder="E-mail*">
								</div>
							</div>
							<div class="divider-line"></div>
							<h6>Home Information</h6>
							<p>Tell us about your home</p>
							<div class="row">
								<div class="col-sm-6">
									<div class="qty-count qty-count--order">
										<span class="count-reduce">–</span>
										<input type="text" class="count-input" value="2 Bedrooms" name="bedrooms">
										<span class="count-add">+</span>
									</div>
									<div class="text-center input-comment">(living room & kitchen included)</div>
								</div>
								<div class="col-sm-6">
									<div class="qty-count qty-count--order">
										<span class="count-reduce">–</span>
										<input type="text" class="count-input" value="1 Bathroom" name="bathroom">
										<span class="count-add">+</span>
									</div>
									<div class="text-center input-comment">(round half baths up)</div>
								</div>
							</div>
							<div class="divider-line"></div>
							<h6>Service Requested</h6>
							<div class="select-wrapper select-wrapper--sm">
								<select name="service" class="input-custom input-custom--sm">
									<option value="" disabled selected>- Please Select -</option>
									<option value="Condo / Apartment Cleaning">Condo / Apartment Cleaning</option>
									<option value="House Cleaning">House Cleaning</option>
									<option value="Move In / Move Out">Move In / Move Out</option>
                                    <option value="Construction Cleaning">Construction Cleaning</option>
                                    <option value="Сarpet Сleaning">Сarpet Сleaning</option>
                                    <option value="Commercial Cleaning">Commercial Cleaning</option>
								</select>
							</div>
							<div class="divider-line"></div>
							<h6>Service Requested</h6>
							<p>When would you like us to come? </p>
							<div class="row">
								<div class="col-sm-4 col-md-5">
									<div class="datetimepicker-wrap">
										<input type="text" name="date" class="form-control input-custom input-custom--sm datetimepicker" placeholder="">
									</div>
								</div>
								<div class="visible-xs text-center">
									<p>Any time between</p>
								</div>
								<div class="col-sm-8 col-md-7 text-right text-center-xs">
									<span class="hidden-xs">Any time between &nbsp;</span>
									<div class="select-wrapper select-wrapper--sm select-time">
										<select name="time1" class="input-custom input-custom--sm">
											<option value="8:00 AM" selected>8:00 AM</option>
											<option value="9:00 AM">9:00 AM</option>
											<option value="10:00 AM">10:00 AM</option>
											<option value="11:00 AM">11:00 AM</option>
											<option value="12:00 NN">12:00 NN</option>
											<option value="13:00 AM">13:00 PM</option>
											<option value="14:00 AM">14:00 PM</option>
											<option value="15:00 AM">15:00 PM</option>
											<option value="16:00 AM">16:00 PM</option>
										</select>
									</div>
									<span>&nbsp;-&nbsp;</span>
									<div class="select-wrapper select-wrapper--sm select-time">
										<select name="time2" class="input-custom input-custom--sm">
											<option value="8:00 AM">8:00 AM</option>
											<option value="9:00 AM">9:00 AM</option>
											<option value="10:00 AM">10:00 AM</option>
											<option value="11:00 AM">11:00 AM</option>
											<option value="12:00 NN">12:00 NN</option>
											<option value="13:00 AM">13:00 PM</option>
											<option value="14:00 AM">14:00 PM</option>
											<option value="15:00 AM" selected>15:00 PM</option>
											<option value="16:00 AM">16:00 PM</option>
										</select>
									</div>
								</div>
							</div>
							<div class="divider-line"></div>
							<h6>How Often?</h6>
							<p>It's all about matching you with the perfect cleaner for your home. Scheduling is flexible. Cancel or reschedule anytime.</p>
							<div class="label-box-wrap">
								<div>
									<input type="radio" name="often" id="radio1" value="ones" checked>
									<label for="radio1"><b>One Time Service</b></label>
								</div>
								<div>
									<input type="radio" name="often" id="radio2" value="weekly">
									<label for="radio2"><b>Weekly </b>15.00% Discount</label>
								</div>
								<div>
									<input type="radio" name="often" id="radio3" value="2 week">
									<label for="radio3"><b>Every 2 Weeks</b> 10.00% Discount</label>
								</div>
								<div>
									<input type="radio" name="often" id="radio4" value="4 week">
									<label for="radio4"><b>Every 4 Weeks</b> 5.00% Discount</label>
								</div>
							</div>
							<div class="divider"></div>
							<div class="divider-line"></div>
							<div class="divider"></div>
							<p class="text-center">We will confirm your service request within 24 hours. Thank you very much!</p>
							<div class="text-center">
								<button type="submit" class="btn btn-wide">BOOK NOW</button>
							</div>
							<div class="divider"></div>
							<div class="successform text-center">
								<div class="divider-line"></div>
								<p>Your message was sent successfully!</p>
								<div class="divider"></div>
							</div>
							<div class="errorform text-center">
								<div class="divider-line"></div>
								<p>Something went wrong, try refreshing and submitting the form again.</p>
								<div class="divider"></div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-4 visible-lg">
					<img src="images/content/order-form-img.jpg" class="img-fullwidth" alt="">
				</div>
			</div>*/
?>
		</div>
	</div>
</main>

<?php
	
	include("footer.php");

?>