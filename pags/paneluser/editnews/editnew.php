<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add</title>
        <link rel="stylesheet" href="../../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../css/bootstrap-rtl.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>

<body class="rtl">
        <div class="container">
                <div class="row">
                        <div class="col-xl-2 col-lg-2"></div>
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 login">
                                <?php
                                include_once("../../controllers/connectdb.php");
                                if ($conn) {
                                        $post_id = $_POST['user_id'];
                                        $query = "SELECT * FROM `posts` WHERE id = '$post_id';";
                                        $res = mysqli_query($conn, $query);
                                        if ($res) {
                                                $post = mysqli_fetch_all($res);
                                        } else {
                                                echo "Dont Query";
                                        }
                                } else {
                                        echo "Dont Donnect DB";
                                }

                                ?>
                                <a href="../userpanel.php" class="btn btn-dark btnback">برگشت</a><br>
                                <form action="../../controllers/users.php" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="form_name" value="edit_post_user" id="">
                                        <input type="hidden" name="post_id" value="<?= $post[0][0] ?>" id="">
                                        <h2 class="h2titleform">ویرایش خبر</h2>
                                        <div class="form-group">
                                                <label for="namenaes">نام مقاله:</label>
                                                <input type="text" name="title" value="<?= $post[0][1] ?>" class="form-control" id="namenaes" placeholder="نام مقاله را وارد کنید :" required>
                                        </div>
                                        <div class="form-group">
                                                <label for="comment">متن مقاله:</label>
                                                <textarea name="post_body" class="form-control" rows="5" id="comment"><?= $post[0][3] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                                <label for="comment">عکس مقاله:</label><br>
                                                <img class="col-xl-8 col-lg-8 col-md-12 col-sm-12" src="<?= $post[0][2] ?>" alt="">
                                        </div>
                                        <div class="form-group">
                                                <p class="help-block">لطفا تصویر مورد نظر مقاله را وارد کنید</p>
                                                <label for="exampleInputFile">تصویر را وارد کنید</label>
                                                <input name="image_body" type="file" id="exampleInputFile" />
                                        </div>
                                        <!-- <a href="" class="btn btn-lg btn-success btn-block btnsubmit">ویراش</a>
                                        <a href="" class="btn btn-lg btn-danger btn-block btnsubmit">حذف</a> -->
                                        <button type="submit" name="btn" value="edit" class="btn btn-lg btn-success btn-block btnsubmit">ویرایش</button>
                                        <button type="submit" name="btn" value="delete" class="btn btn-lg btn-danger btn-block btnsubmit">حذف</button>
                                </form>
                        </div>
                        <div class="col-xl-2 col-lg-2"></div>
                </div>
        </div>
</body>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</html>