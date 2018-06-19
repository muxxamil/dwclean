<h2 class="text-center h-lg h-decor">Add New Post</h2>
<form class="contact-form" id="blogForm" method="post" novalidate>
	<input type="hidden" class="input-custom input-full" name="base64Image" id="base64Image">
	<div class="notificationBox text-center">
		<p id = "blogNotification">Your message was sent successfully!</p>
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