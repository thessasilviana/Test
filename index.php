<?php
ob_start();
session_start();
?>
<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html idmmzcc-ext-docid="399388672" lang="en"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #eee;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin .checkbox {
            font-weight: normal;
        }
        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="text"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

    </style>


    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <!-- Bootstrap responsive css -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" media="screen">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- respond javascript -->
    <script src="js/respond.js"></script>
    <!-- html5shiv javascript -->
    <script src="js/html5shiv.js"></script>

    <!-- parallax -->
    <script src="js/parallax.js"></script>

    <!-- UIKIT -->
    <link rel="stylesheet" href="vendors/uikit/css/uikit.css" />

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="vendors/rs-plugin/css/settings.css" media="screen">

</head>

<body>

<div class="container">

    <form class="form-signin" name="formlogin" method="post">
        <?php
        if (isset($_POST['user'])){

            $myuser = mysqli_real_escape_string($con,stripslashes($_POST['user']));
            $mypass = sha1(mysqli_real_escape_string($con,stripslashes($_POST['pass'])));

            $result = mysqli_query($con,"SELECT * FROM login WHERE usr = '$myuser' AND
													 pass = '$mypass'");

            $count=mysqli_num_rows($result);

            if($count==1){
                $_SESSION['logged']=true;
                $_SESSION['user'] = $myuser;
                $_SESSION['pass'] = $pass;
                header("location:dashboard.php");
                exit();
            } else {
                $_SESSION['logged']=false;
                echo "<p align='center' style='color: red'>Wrong Username or Password</p>";
            }
        }
        ?>

        <h2 class="form-signin-heading">Please sign in</h2>
        <input id="inputUsername" name="user" class="form-control" placeholder="Username" required="" autofocus="" type="text">
		<br />
        <input id="inputPassword" name="pass" class="form-control" placeholder="Password" required="" type="password">
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="btnLoginIndex">Sign in</button>
    </form>

</div>

</body></html>