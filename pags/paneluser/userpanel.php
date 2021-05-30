<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Margavar Tourism</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/bootstrap-rtl.min.css">
  <link rel="stylesheet" href="../../css/style.css">
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
        include_once("../controllers/connectdb.php");
        if ($conn) {
          session_start();
          $id = $_SESSION['id'];
          $username = $_SESSION['username'];
          $posts = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM `posts` WHERE `user_id` = '$id'"));
          if ($posts) {
          } else {
            echo "هیچ پستی وجود ندارد.";
          }
        } else {
          echo "Dot Connect DB";
        }
        ?>
        <div class="headerbtn">
          <a href="../../index.php" class="btn btn-info btn-lg btnback">برگشت</a>
          <a href="../../index.php" class="btn btn-success btn-lg">ثبت</a>
        </div>
        <h6> داشبورد کاربر <span style="color: green;"><?= $username ?></span></h6>
        <hr class="my-4 mb-3">
        <a href="addnews/addnew.html" class="btn btn-primary btn-block">افزودن</a>
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
                  <form action="editnews/editnew.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $post[0] ?>" name="user_id">
                    <input type="submit" value="ویرایش" class="btn btn-success btn-block">
                  </form>
                </div>
              </div>
            <?php } ?>
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