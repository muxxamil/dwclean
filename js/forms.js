		(function ($) {

			"use strict";

			var $document = $(document),
			    $window = $(window),
			    forms = {
				contactForm: $('#contactForm'),
				blogForm: $('#blogForm'),
				loginForm: $('#loginForm'),
				orderForm: $('#orderForm'),
				questionForm: $('#questionForm')
			};

			$document.ready(function () {

				// order form
				if (forms.orderForm.length) {
					var $orderForm = forms.orderForm;
					$orderForm.validate({
						rules: {
							name: {
								required: true,
								minlength: 2
							},
							message: {
								required: true,
								minlength: 20
							},
							email: {
								required: true,
								email: true
							}

						},
						messages: {
							name: {
								required: "Please enter your name",
								minlength: "Your name must consist of at least 2 characters"
							},
							message: {
								required: "Please enter message",
								minlength: "Your message must consist of at least 20 characters"
							},
							email: {
								required: "Please enter your email"
							}
						},
						submitHandler: function submitHandler(form) {
							$(form).ajaxSubmit({
								type: "POST",
								data: $(form).serialize(),
								url: "controllers/process-order.php",
								success: function success() {
									$('.successform', $orderForm).fadeIn();
									$orderForm.get(0).reset();
								},
								error: function error() {
									$('.errorform', $orderForm).fadeIn();
								}
							});
						}
					});
				}

				// contact page form
				if (forms.contactForm.length) {
					var $contactform = forms.contactForm;
					$contactform.validate({
						rules: {
							name: {
								required: true,
								minlength: 2
							},
							message: {
								required: true,
								minlength: 20
							},
							email: {
								required: true,
								email: true
							}

						},
						messages: {
							name: {
								required: "Please enter your name",
								minlength: "Your name must consist of at least 2 characters"
							},
							message: {
								required: "Please enter message",
								minlength: "Your message must consist of at least 20 characters"
							},
							email: {
								required: "Please enter your email"
							}
						},
						submitHandler: function submitHandler(form) {
							$(form).ajaxSubmit({
								type: "POST",
								data: $(form).serialize(),
								url: "controllers/process-contact.php",
								success: function success() {
									$('.successform', $contactform).fadeIn();
									$orderForm.get(0).reset();
								},
								error: function error() {
									$('.errorform', $contactform).fadeIn();
								}
							});
						}
					});
				}

				

				// blog page form
				if (forms.loginForm.length) {
					var $loginForm = forms.loginForm;
					$loginForm.validate({
						rules: {
							email: {
								required: true,
								email: true
							},
							password: {
								required: true
							}

						},
						messages: {
							email: {
								required: "Please enter email",
							},
							password: {
								required: "Please enter password",
							},
						},
						submitHandler: function submitHandler(form) {
							$(form).ajaxSubmit({
								type: "POST",
								data: $(form).serialize(),
								url: "../controllers/login.php",
  								dataType: 'json',
								success: function (response) {
									if(response && response.status && response.message && response.status != 200) {
										$('#loginNotification').text(response.message);
										$('#loginNotification').css('color', 'red');
										$('.notificationBox', $loginForm).fadeIn();
									}
									if(response && response.status && response.status == 200) {
										window.location.replace("../blog-posts.php");
									}
								},
								error: function error() {
									$('.errorform', $loginForm).fadeIn();
								}
							});
						}
					});
				}

				// question page form
				if (forms.questionForm.length) {
					var $questionForm = forms.questionForm;
					$questionForm.validate({
						rules: {
							name: {
								required: true,
								minlength: 2
							},
							message: {
								required: true,
								minlength: 20
							},
							email: {
								required: true,
								email: true
							}

						},
						messages: {
							name: {
								required: "Please enter your name",
								minlength: "Your name must consist of at least 2 characters"
							},
							message: {
								required: "Please enter message",
								minlength: "Your message must consist of at least 20 characters"
							},
							email: {
								required: "Please enter your email"
							}
						},
						submitHandler: function submitHandler(form) {
							$(form).ajaxSubmit({
								type: "POST",
								data: $(form).serialize(),
								url: "controllers/process-question.php",
								success: function success() {
									$('.successform', $questionForm).fadeIn();
									$questionForm.get(0).reset();
								},
								error: function error() {
									$('.errorform', $questionForm).fadeIn();
								}
							});
						}
					});
				}
				// datepicker
				if ($('.datetimepicker').length) {
					$('.datetimepicker').datetimepicker({
						format: 'DD/MM/YYYY',
						icons: {
							time: 'icon icon-clock',
							date: 'icon icon-calendar',
							up: 'icon icon-arrow_up',
							down: 'icon icon-arrow_down',
							previous: 'icon icon-arrow-left',
							next: 'icon icon-arrow-right',
							today: 'icon icon-today',
							clear: 'icon icon-trash',
							close: 'icon icon-cancel-music'
						}
					});
				}
				if ($('.timepicker').length) {
					$('.timepicker').datetimepicker({
						format: 'LT',
						icons: {
							time: 'icon icon-clock',
							up: 'icon icon-arrow_up',
							down: 'icon icon-arrow_down',
							previous: 'icon icon-arrow-left',
							next: 'icon icon-arrow-right'
						}
					});
				}
			});

		})(jQuery);

		function deletePost(id) {
		    $.ajax({
		        type: "POST",
		        url: "controllers/delete-post.php",
		        data: { 
		            id: id,
		        },
		        success: function(result) {
		        	if($("#blogPost" + id).length) {
		            	$("#blogPost" + id).remove();
		        	}
		        },
		        error: function(result) {
		            
		        }
		    });
		}