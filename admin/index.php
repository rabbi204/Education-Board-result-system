<?php
    require_once "../config.php";
    require_once "../vendor/autoload.php";

    use Edu\Board\Support\Auth;

   $auth = new Auth;

?>

<!DOCTYPE html>
<html lang="en" class=" ">
<!-- Mirrored from flatfull.com/themes/scale/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Admin Login</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
</head>

<body class="">
    <?php
    
    /**
    * Login form isseting 
    */
    if( isset($_POST['login']) ){
        //value get
        $email_uname = $_POST['email_uname'];
        $pass = $_POST['pass'];

        if( empty($email_uname) || empty($pass) ){
            $mess = "<p class=\"alert alert-warning\">All fileds are required! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
        }else{

            $mess = $auth -> userLoginSystem($email_uname,$pass);

        }

    }
    
    
    
    ?>

    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        <div class="container aside-xl"> <a class="navbar-brand block" href="index.html">Education Board Result</a>
            <hr>
            <?php

                if( isset($mess) ){
                    echo $mess;
                }

            ?>
            <section class="m-b-lg">

                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="list-group">
                        <div class="list-group-item">
                            <input type="email" name="email_uname" placeholder="Email / Username" class="form-control no-border"> </div>
                        <div class="list-group-item">
                            <input type="password" name="pass" placeholder="Password" class="form-control no-border"> </div>
                    </div>
                    <button name="login" type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
                    <div class="line line-dashed"></div>
                </form>

            </section>
        </div>
    </section>
    <!-- Bootstrap -->
    <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/app.plugin.js"></script>
</body>
<!-- Mirrored from flatfull.com/themes/scale/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->

</html>