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
                                        $user_id = $_POST['user_id'];
                                        $query = "SELECT * FROM posts WHERE id = $user_id;";
                                        $res = mysqli_query($conn, $query);
                                        if (mysqli_num_rows($res) == 1) {
                                                $post = mysqli_fetch_assoc($res);
                                        } else {
                                                echo "dont send";
                                        }
                                } else {
                                        echo "Dont Connectdb";
                                }
                                ?>
                                <a href="../admin.php" class="btn btn-dark btnback">برگشت</a><br>
                                <form action="../../controllers/addnewsadmin.php" method="POST" enctype="multipart/form-data">
                                        <h2 class="h2titleform">ویرایش خبر</h2>
                                        <input type="hidden" name="form_name" value="editnew">
                                        <input type="hidden" name="user_id" value="<?= $post['id'] ?>">
                                        <div class="form-group">
                                                <label for="namenaes">نام مقاله:</label>
                                                <input type="text" class="form-control" id="namenaes" name="title" value="<?= $post['title'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                                <label for="comment">متن مقاله:</label>
                                                <textarea name="post_body" class="form-control" rows="5" id="comment"><?= $post['post_body'] ?></textarea>
                                        </div>
                                        <div class="">
                                                <p class="help-block">تصویر :</p>
                                                <img class="col-xl-8 col-lg-8 col-md-12 col-sm-12" id="image-body" src="<?= $post['path'] ?>" alt="">
                                        </div>
                                        <div class="form-group">
                                                <p class="help-block">لطفا تصویر مورد نظر مقاله را وارد کنید</p>
                                                <input type="file" name="imgnews" value="<?= $post['path'] ?>" id="exampleInputFile" />
                                        </div>
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