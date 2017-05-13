<?php

    require '../class/Login.php';
    $obj_login = new Login();
    $message='';
    if(isset($_POST['btn'])){
        $message = $obj_login ->admin_login_check($_POST);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin || Portfolio</title>
    <link href="../assets/backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/backend/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../assets/backend/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../assets/backend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                        <h4><?php echo $message;?></h4>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email_address" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Login">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
<!--                                <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>-->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/backend/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/backend/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/backend/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../assets/backend/dist/js/sb-admin-2.js"></script>
</body>
</html>
