<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>مقالات کابران</title>
  <link rel="stylesheet" href="../../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../css/bootstrap-rtl.min.css">
  <link rel="stylesheet" href="../../../css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link rel="stylesheet" href="style.css">
</head>

<body class="rtl">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2">

      </div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
        <?php
        include_once("../../controllers/connectdb.php");
        if ($conn) {
          $query = "SELECT * FROM `posts` WHERE user_id != 1;";
          $res = mysqli_query($conn, $query);
          $posts = mysqli_fetch_all($res);
        } else {
          echo "Dot Connect DB";
        }
        ?>
        <div class="headerbtn">
          <a href="../admin.php" class="btn btn-info btn-lg btnback">برگشت</a>
          <a href="../admin.php" class="btn btn-success btn-lg">ثبت</a>
        </div>
        <hr class="my-4 mb-3">
        <h5 style="font-family: 'yekan';">مقالات کاربران عادی برای نمایش روی صفحه اصلی دکمه تایید و برای حذف از صف دکمه
          رد را بزنید</h5>
        <hr class="my-4 mb-3">
        <!-- News -->
        <div class="container">
          <div class="row">
            <?php
            foreach ($posts as $post) {
            ?>
              <div class="card col-xl-4 col-lg-4 col-md-6 col-sm-12" style="width: 14rem;  background-color: rgb(252, 242, 242);">
                <img class="card-img-top" src="<?= $post[2] ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title" style="font-family: 'Courier New', Courier, monospace;"><?= $post[1] ?></h5>
                  <p class="card-text" style="font-family: Arial, Helvetica, sans-serif;"><?= $post[3] ?></p>
                  <form action="../../controllers/addnewsadmin.php" method="POST">
                    <input type="hidden" name="form_name" value="UserSend" id="">
                    <input type="hidden" name="id" value="<?= $post[0] ?>" id="">
                    <button type="submit" name="btn" value="Confirmation" class="btn btn-success" id="">تایید</button>
                    <button type="submit" name="btn" value="reject" class="btn btn-danger" id="">رد کردن</button>
                  </form>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-lg-2">
      </div>
    </div>
</body>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</html>