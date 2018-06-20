$(document).ready(function () {
	var pageNo = $('#pageNumber').val(),
    forms = {
                textBlogForm: $('#textBlogForm'),
                imageBlogForm: $('#imageBlogForm'),
                videoBlogForm: $('#videoBlogForm'),
            };

	getBlogPosts(pageNo);

	function getBlogPosts(pageNo) {
		pageNo = (pageNo && pageNo != 0) ? pageNo : 1;
		$.ajax({    //create an ajax request to display.php
            type: "GET",
            url: "tpl/blog-list.tpl.php", 
            data: "pageNumber=" + pageNo,            
            dataType: "html",   //expect html to be returned                
            success: function(response){                    
                $("#postResultBox").html(response); 
            }

        });
	}

    // blog page form
    if (forms.textBlogForm.length) {
        var $textBlogForm = forms.textBlogForm;
        $textBlogForm.validate({
            rules: {
                title: {
                    required: true,
                    minlength: 2
                },
                description: {
                    required: true,
                    minlength: 20
                }

            },
            messages: {
                title: {
                    required: "Please enter title",
                    minlength: "Title must consist of at least 2 characters"
                },
                description: {
                    required: "Please enter description",
                    minlength: "Description must consist of at least 20 characters"
                },
            },
            submitHandler: function submitHandler(form) {
                $(form).ajaxSubmit({
                    type: "POST",
                    data: $(form).serializeArray(),
                    url: "controllers/add-post.php",
                    success: function (response) {
                        $('#blogNotification').text(response);
                        $('#blogNotification').css('color', 'red');
                        $('.notificationBox', $textBlogForm).fadeIn();


                        $(form).trigger("reset");
                        var pageNo = $('#pageNumber').val();
                        getBlogPosts(pageNo);
                    },
                    error: function error() {
                        $('.errorform', $textBlogForm).fadeIn();
                    }
                });
            }
        });
    }

    // blog page form
    if (forms.imageBlogForm.length) {
        var $imageBlogForm = forms.imageBlogForm;
        $imageBlogForm.validate({
            rules: {
                title: {
                    required: true,
                    minlength: 2
                },
                description: {
                    required: true,
                    minlength: 20
                }

            },
            messages: {
                title: {
                    required: "Please enter title",
                    minlength: "Title must consist of at least 2 characters"
                },
                description: {
                    required: "Please enter description",
                    minlength: "Description must consist of at least 20 characters"
                },
            },
            submitHandler: function submitHandler(form) {
                $(form).ajaxSubmit({
                    type: "POST",
                    data: $(form).serializeArray(),
                    url: "controllers/add-post.php",
                    success: function (response) {
                        $('#imageBlogNotification').text(response);
                        $('#imageBlogNotification').css('color', 'red');
                        $('.imageBlogNotificationBox', $imageBlogForm).fadeIn();

                        $(form).trigger("reset");

                        var pageNo = $('#pageNumber').val();
                        getBlogPosts(pageNo);
                    },
                    error: function error() {
                        $('.errorform', $imageBlogForm).fadeIn();
                    }
                });
            }
        });
    }

    // blog page form
    if (forms.videoBlogForm.length) {
        var $videoBlogForm = forms.videoBlogForm;
        $videoBlogForm.validate({
            rules: {
                title: {
                    required: true,
                    minlength: 2
                },
                videoLink: {
                    required: true,
                    minlength: 2
                },
                description: {
                    required: true,
                    minlength: 20
                }

            },
            messages: {
                title: {
                    required: "Please enter title",
                    minlength: "Title must consist of at least 2 characters"
                },
                videoLink: {
                    required: "Please enter video link",
                    minlength: "Title must consist of at least 2 characters"
                },
                description: {
                    required: "Please enter description",
                    minlength: "Description must consist of at least 20 characters"
                },
            },
            submitHandler: function submitHandler(form) {
                $(form).ajaxSubmit({
                    type: "POST",
                    data: $(form).serializeArray(),
                    url: "controllers/add-post.php",
                    success: function (response) {
                        $('#videoBlogNotification').text(response);
                        $('#videoBlogNotification').css('color', 'red');
                        $('.videoBlogNotificationBox', $videoBlogForm).fadeIn();

                        $(form).trigger("reset");

                        var pageNo = $('#pageNumber').val();
                        getBlogPosts(pageNo);
                    },
                    error: function error() {
                        $('.errorform', $videoBlogForm).fadeIn();
                    }
                });
            }
        });
    }
});