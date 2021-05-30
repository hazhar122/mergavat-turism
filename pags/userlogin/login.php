<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Login</title>
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/bootstrap-rtl.min.css">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        <link rel="stylesheet" href="style.css">
</head>

<body class="rtl">
        <div class="container">
                <div class="row">
                        <div class="col-xl-2 col-lg-2"></div>
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 login">
                                <a href="../../index.php" class="btn btn-dark btnback">برگشت</a><br>
                                <form action="../controllers/users.php" method="POST">
                                        <h2 class="h2titleform">ورود کاربر</h2>
                                        <div class="form-group">
                                                <input type="hidden" name="form_name" id="formname" value="login_user">
                                                <label for="username">نام کاربری:</label>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="نام کاربری کاربر را وارد کنید" required>
                                        </div>
                                        <div class="form-group">
                                                <label for="password">رمز عبور:</label>
                                                <input type="password" name="password" class="form-control" id="password" placeholder="رمز عبود کاربر را وارد کنید" required>
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-success btn-block btnsubmit">ورود</button>
                                        <!-- <a href="../paneluser/userpanel.html" class="btn btn-lg btn-success btn-block btnsubmit" >ورود</a> -->
                                </form>
                        </div>
                        <div class="col-xl-2 col-lg-2"></div>
                </div>
        </div>

</body>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</html>