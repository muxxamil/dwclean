<h2 class="text-center h-lg h-decor">Add New Post</h2>
<div class="faq-item">
	<div class="panel">
		<div class="panel-heading">
			<h4 class="panel-title"><a role="button" data-toggle="collapse" href="#textPost1" class="collapsed">Text Post<span class="caret-toggle closed">–</span><span class="caret-toggle opened">+</span></a></h4>
		</div>
		<div id="textPost1" class="panel-collapse collapse">
			<div class="panel-body">
				<form class="contact-form" id="textBlogForm" method="post" novalidate>
					<div class="notificationBox text-center">
						<p id = "blogNotification">Text Post has been added!</p>
					</div>
					<div class="errorform text-center">
						<p>Something went wrong, try refreshing and submitting the form again.</p>
					</div>
					<div class="input-wrapper">
						<input type="text" class="input-custom input-full" name="title" placeholder="Post Title*">
					</div>
					<div class="input-wrapper">
						<textarea class="textarea-custom input-full" name="description" placeholder="Description*"></textarea>
					</div>
					<div class="text-center">
						<button type="submit" class="btn">Add Post</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="panel">
		<div class="panel-heading">
			<h4 class="panel-title"><a role="button" data-toggle="collapse" href="#imagePost" class="collapsed">Image Post<span class="caret-toggle closed">–</span><span class="caret-toggle opened">+</span></a></h4>
		</div>
		<div id="imagePost" class="panel-collapse collapse">
			<div class="panel-body">
				<form class="contact-form" id="imageBlogForm" method="post" novalidate>
					<input type="hidden" class="input-custom input-full" name="base64Image" id="base64Image">
					<div class="imageBlogNotificationBox text-center">
						<p id = "imageBlogNotification">Image Post has been added!</p>
					</div>
					<div class="errorform text-center">
						<p>Something went wrong, try refreshing and submitting the form again.</p>
					</div>
					<div class="input-wrapper">
						<input type="text" class="input-custom input-full" name="title" placeholder="Post Title*">
					</div>
					<div class="input-wrapper">

						<div class="input-group image-preview">
				            <input type="text" class="input-custom input-full form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
				            <span class="input-group-btn">
				                <!-- image-preview-clear button -->
				                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">  Clear
				                </button>
				                <!-- image-preview-input -->
				                <div class="btn btn-default image-preview-input">
				                    <span class="image-preview-input-title">Browse</span>
				                    <input type="file" class="input-custom input-full" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
				                </div>
				            </span>
				        </div>

					</div>
					<div class="input-wrapper">
						<textarea class="textarea-custom input-full" name="description" placeholder="Description*"></textarea>
					</div>
					<div class="text-center">
						<button type="submit" class="btn">Add Post</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="panel">
		<div class="panel-heading">
			<h4 class="panel-title"><a role="button" data-toggle="collapse" href="#videoPost" class="collapsed">Video Post<span class="caret-toggle closed">–</span><span class="caret-toggle opened">+</span></a></h4>
		</div>
		<div id="videoPost" class="panel-collapse collapse">
			<div class="panel-body">
				<form class="contact-form" id="videoBlogForm" method="post" novalidate>
					<div class="videoBlogNotificationBox text-center">
						<p id = "videoBlogNotification">Video Post has been added!</p>
					</div>
					<div class="errorform text-center">
						<p>Something went wrong, try refreshing and submitting the form again.</p>
					</div>
					<div class="input-wrapper">
						<input type="text" class="input-custom input-full" name="title" placeholder="Post Title*">
					</div>
					<div class="input-wrapper">
						<input type="text" class="input-custom input-full" name="videoLink" placeholder="Paste video link from youtube">
					</div>
					<div class="input-wrapper">
						<textarea class="textarea-custom input-full" name="description" placeholder="Description*"></textarea>
					</div>
					<div class="text-center">
						<button type="submit" class="btn">Add Post</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>