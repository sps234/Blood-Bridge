<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bridge</title>

    <link rel="stylesheet" href="CSS/index.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="Assets/images/blood-drop-svgrepo-com.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: var(--primary-bg-color);">
    <div class="container" style="margin-bottom: 50px;">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: var(--navbar-bg-color);">
        <div class="navbar-brand-container">
            <a class="navbar-brand" href="index.php" style="color: var(--navbar-text-color); font-size:22px; letter-spacing:2px;">BB</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="patient/register.php" style="color: var(--navbar-text-color);">REGISTER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="patient/login.php" style="color: var(--navbar-text-color);">LOGIN</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

    <div class='container text-center' style="color: var(--main-text-color); padding-top: 100px; padding-bottom:50px;">
        <h1 class="display-6">Blood Bridge - Blood Bank </h1>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <p class="lead mt-3">
                Blood Bridge provides a streamlined solution for managing blood donations, tracking donors, and assisting recipients, ensuring that life-saving blood is accessible <br> when it's needed the most.
                </p>
                <p class="lead mt-3 mb-5">
                Be a part of our life-saving mission. Sign up as a donor or recipient today and make a meaningful impact!
                </p>

            </div>
            <div class="col-lg-6">
                <img id="animated-image" src="Assets/images/blood-donation.svg" alt="" class="img-fluid d-none d-lg-block" >
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<footer class="footer" style="background-color: var(--footer-bg-color); color: var(--footer-text-color); padding: 15px; text-align: center; position: absolute; bottom: 0; width: 100%;">
    &copy; <a style="color: var(--footer-link-color);" href="https://github.com/sps234">sps234</a> ❤️. All rights reserved. 2024 
</footer>
</html>
