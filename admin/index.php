<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <link href="../css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <script src="../js/vendor/jquery.js"></script>
</head>
<body>
    
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="contact-form" id="loginForm" method="post" novalidate>
                <div class="notificationBox text-center">
                    <p id = "loginNotification">Your message was sent successfully!</p>
                </div>
                <div class="errorform text-center">
                    <p>Something went wrong, try refreshing and submitting the form again.</p>
                </div>
                <div class="input-wrapper">
                    <input type="text" class="input-custom input-full" name="email" placeholder="Email">
                </div>
                <div class="input-wrapper">
                    <input type="password" class="input-custom input-full" name="password" placeholder="Password">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn">Sign In</button>
                </div>
            </form>
        </div>
    </div>
    <script src="../js/vendor/bootstrap.min.js"></script>
    <script src="../js/vendor/jquery.form.js"></script>
    <script src="../js/vendor/jquery.validate.min.js"></script>
    <script src="../js/forms.js"></script>
</body>