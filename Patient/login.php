<?php
    
    
    require_once("../includes/session.inc.php");
    require_once("../includes/template.php");
    if(isset($_SESSION["patient"]) && isset($_GET["login"]) && $_GET["login"]==="success")
    {
        header("Location:dashboard.php");
    }
    function check_errors()
    {
        if(isset($_SESSION["patient_error_login"]))
        {
            $errors = $_SESSION["patient_error_login"];
            echo "<br>";
            foreach ($errors as $error) {
                echo '<div class="alert alert-danger alert-dismissible fade show text-center mx-auto" role="alert" style="width: fit-content;">';
                echo $error;
                echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background:none;">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                ';
            }
            unset($_SESSION["patient_error_login"]);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../Assets/images/blood-drop.svg" type="image/x-icon">
    <!-- External CSS -->
    <link rel="stylesheet" href="../CSS/Patient/login.css">

</head>
<body style="background-color: #f5f5dc;">
    <div class="container" style="margin-top:80px;">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:#f8f88f;">
        <a class="navbar-brand" href="../index.php" style="color: #777;font-size:22px;letter-spacing:2px;">Blood Bridge</a>
    </nav>
        <?php 
            check_errors();
        ?>
        <div class="text-center custom-text-center">
            <a class="btn active" href="../patient/login.php">As Patient</a>
            <a class="btn" href="../donor/login.php">As Donor</a>
            <a class="btn" href="../admin/login.php">As Admin</a>
        </div>
        <!-- Patient Register Form -->
        <div style="display:block;">
            <?php login_template("Patient Login"); ?>
        </div>
    </div>
    <!-- Bootstrap JS and jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
