<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Margavar Tourism</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">


</head>

<body class="rtl">
      <div class="container">
            <div class="row">
                  <div class="col-xl-1 col-lg-1"></div>
                  <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                        <?php
                        include_once("pags/controllers/connectdb.php");
                        if ($conn) {
                              $query = "SELECT * FROM `posts` WHERE user_id = 1 ;";
                              $posts = mysqli_fetch_all(mysqli_query($conn, $query));
                              if ($posts) {
                              } else {
                                    echo "Dont Query";
                              }
                        } else {
                              echo "Dont Connect DB";
                        }
                        ?>
                  </div>
                  <div class="col-xl-1 col-lg-1"></div>
            </div>
      </div>

      <div id="header">
            <nav class="navbar navbar-expand-lg navbar-dark  bg-dark fixed-top">
                  <a class="navbar-brand" href="#">Mergavar Tourism</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                    <a class="nav-link" href="#">خانه <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="#news">مقالات ما</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="#authors">نویسندگان</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="#newnews">اخبار تازه</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="#footer_div">تماس با ما</a>
                              </li>
                        </ul>
                        <ul class="navbar-nav ">
                              <li class="nav-item">
                                    <a class="nav-link" href="pags/userlogin/login.php"> ورود </a>
                              </li>

                              <li class="nav-item">
                                    <a class="nav-link" href="pags/userlogin/register.html"> ثبت نام </a>
                              </li>

                        </ul>
                  </div>
            </nav>
            <div class="jumbotron text-center">
                  <div class="intro">
                        <h1>مرگور توریسم</h1>
                        <p>مرگور توریسم سایتی پر از مکان های طبیعی منطقه مرگور است </p>
                  </div>
            </div>

      </div>
      <!-- End Home -->

      <!-- Adout -->
      <div id="about" class="">
            <div class="col-12 text-center area">
                  <h2>سایت مرگور توریسم یک سایت معرفی طبیعت بکر منطقه زیبای مرگور است</h2>
                  <p>در سایت ما می توانید هر انچه در منطقه مرگوروجود دارد را ببینید</p>
                  <a class="btn btn-secondary" href="#">درباره ما بیشتر بدانید</a>
            </div>
      </div>
      <!-- End Adout -->
      <!-- Slider -->
      <div class="container">
            <div class="row">
                  <div class="col-xl-1 col-lg-1"></div>
                  <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner">
                                    <div class="carousel-item active">
                                          <img class="d-block w-100" src="images/slider1.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                          <img class="d-block w-100" src="images/slider1.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                          <img class="d-block w-100" src="images/slider1.jpg" alt="Third slide">
                                    </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                              </a>
                        </div>
                  </div>
                  <div class="col-xl-1 col-lg-1"></div>
            </div>
      </div>
      <!-- End Slider -->
      <!-- ************************** -->
      <!-- News -->
      <div class="container-fluid">
            <div class="row">
                  <div class="col-xl-1 col-lg-1">

                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-8 col-sm-12">
                        <!-- News -->
                        <div id="news" class="container news">
                              <div class="row">
                                    <?php
                                    foreach ($posts as $post) {
                                    ?>
                                          <div class="col-12">
                                                <div class="row newrow">
                                                      <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                                                            <h3 class="h3matn"><?= $post[1]  ?></h3>
                                                            <p class="pmatn"><?= $post[3]  ?></p>
                                                      </div>
                                                      <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 divimg ">
                                                            <img src="<?= $post[2]  ?>" class="imgmatn" alt="Mergavar Turism">
                                                      </div>
                                                </div>
                                                <hr class="teacher-hr">
                                          </div>
                                    <?php
                                    }
                                    ?>

                                    <!-- <div class="col-12">
                                          <div class="row newrow">
                                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 ">
                                                      <img src="images/1.jpg" class="imgmatn" alt="">
                                                </div>
                                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                                                      <h3 class="h3matn">بوز سینا</h3>
                                                      <p class="pmatn">
                                                            وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی،
                                                            صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و
                                                            صفحه‌بندی را به پایان برند.
                                                      </p>
                                                </div>
                                          </div>
                                          <hr class="teacher-hr">

                                    </div> -->
                                    <!-- <div class="col-12">
                                          <div class="row newrow">
                                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                                                      <h3 class="h3matn">بوز سینا</h3>
                                                      <p class="pmatn">
                                                            وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی،
                                                            صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و
                                                            صفحه‌بندی را به پایان برند.
                                                      </p>
                                                </div>
                                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                                                      <img src="images/2.jpg" class="imgmatn" alt="">
                                                </div>
                                          </div>
                                          <hr class="teacher-hr">

                                    </div>
                                    <div class="col-12">
                                          <div class="row newrow">
                                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 ">
                                                      <img src="images/1.jpg" class="imgmatn" alt="">
                                                </div>
                                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                                                      <h3 class="h3matn">بوز سینا</h3>
                                                      <p class="pmatn">
                                                            وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی،
                                                            صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و
                                                            صفحه‌بندی را به پایان برند.
                                                      </p>
                                                </div>
                                          </div>
                                          <hr class="teacher-hr">

                                    </div>
                                    <div class="col-12">
                                          <div class="row newrow">
                                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                                                      <h3 class="h3matn">بوز سینا</h3>
                                                      <p class="pmatn">
                                                            وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی،
                                                            صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و
                                                            صفحه‌بندی را به پایان برند.
                                                      </p>
                                                </div>
                                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                                                      <img src="images/2.jpg" class="imgmatn" alt="">
                                                </div>
                                          </div>
                                          <hr class="teacher-hr">

                                    </div>
                                    <div class="col-12">
                                          <div class="row newrow">
                                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 ">
                                                      <img src="images/1.jpg" class="imgmatn" alt="">
                                                </div>
                                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                                                      <h3 class="h3matn">بوز سینا</h3>
                                                      <p class="pmatn">
                                                            وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی،
                                                            صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و
                                                            صفحه‌بندی را به پایان برند.
                                                      </p>
                                                </div>
                                          </div>
                                          <hr class="teacher-hr">

                                    </div>
                                    <div class="col-12">
                                          <div class="row newrow">
                                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                                                      <h3 class="h3matn">بوز سینا</h3>
                                                      <p class="pmatn">
                                                            وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی،
                                                            صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و
                                                            صفحه‌بندی را به پایان برند.
                                                      </p>
                                                </div>
                                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                                                      <img src="images/2.jpg" class="imgmatn" alt="">
                                                </div>
                                          </div>
                                          <hr class="teacher-hr">

                                    </div> -->
                              </div>
                        </div>
                        <!-- End News -->
                  </div>

                  <div class=" col-xl-3 col-lg-3 col-md-4 col-sm-12 newNews ">
                        <!-- New News -->
                        <div id="newnews" class="list-group">
                              <a href="#" class="list-group-item list-group-item-action active">
                                    پر باز دید ترین مناطق
                              </a>
                              <a href="#" class="list-group-item list-group-item-action nNews">بوز سینا <span class="badge">14</span></a>
                              <a href="#" class="list-group-item list-group-item-action nNews">دریاچه دالامپر <span class="badge">12</span></a>
                              <a href="#" class="list-group-item list-group-item-action nNews">دره ی بینار <span class="badge">7</span></a>
                              <a href="#" class="list-group-item list-group-item-action nNews ">جنگل های روستای نوی
                                    <span class="badge">3</span></a>
                        </div>
                        <!-- End New News -->
                        <!-- List Groups -->

                        <!-- End List Groups -->
                  </div>

                  <div class="col-xl-1 col-lg-1" style="background-color: white; padding-bottom: 9rem;">

                  </div>
            </div>
      </div>
      <!-- *********************     -->
      <!-- Auther -->
      <div id="authors" class="authors">
            <div class="jumbotron">
                  <div class="col-12 text-center">
                        <h2 class="title">نویسندگان مقالات </h2>
                        <div id="underline" class="underline"></div>
                  </div>
                  <div class="container text-center py-3">
                        <div class="row">
                              <div class="col-g-3 col-md-3 author">
                                    <div class="card">
                                          <div class="card-body">
                                                <img src="images/person/1.jpg" class="img-fluid rounded-circle w-50" alt="">
                                                <h3>هژار نعمتی</h3>
                                                <h5>نویسنده و تحلیل گر</h5>
                                                <p>
                                                      وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه
                                                      گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به
                                                      پایان برند.
                                                </p>
                                                <div class="d-flex flex-row justify-content-center">
                                                      <div class="p-2">
                                                            <a href="#">
                                                                  <i class="fab fa-twitter-square"></i>
                                                            </a>
                                                      </div>
                                                      <div class="p-2">
                                                            <a href="#">
                                                                  <i class="fab fa-instagram"></i>
                                                            </a>
                                                      </div>
                                                      <div class="p-2">
                                                            <a href="#">
                                                                  <i class="fab fa-facebook-square"></i>
                                                            </a>
                                                      </div>
                                                      <div class="p-2">
                                                            <a href="#">
                                                                  <i class="fab fa-youtube-square"></i>
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-g-3 col-md-3 author">
                                    <div class="card">
                                          <div class="card-body">
                                                <img src="images/person/1.jpg" class="img-fluid rounded-circle w-50" alt="">
                                                <h3>هژار نعمتی</h3>
                                                <h5>نویسنده و تحلیل گر</h5>
                                                <p>
                                                      وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه
                                                      گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به
                                                      پایان برند.
                                                </p>
                                                <div class="d-flex flex-row justify-content-center">
                                                      <div class="p-2">
                                                            <a href="#">
                                                                  <i class="fab fa-twitter-square"></i>
                                                            </a>
                                                      </div>
                                                      <div class="p-2">
                                                            <a href="#">
                                                                  <i class="fab fa-instagram"></i>
                                                            </a>
                                                      </div>
                                                      <div class="p-2">
                                                            <a href="#">
                                                                  <i class="fab fa-facebook-square"></i>
                                                            </a>
                                                      </div>
                                                      <div class="p-2">
                                                            <a href="#">
                                                                  <i class="fab fa-youtube-square"></i>
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-g-3 col-md-3 author">
                                    <div class="card">
                                          <div class="card-body">
                                                <img src="images/person/1.jpg" class="img-fluid rounded-circle w-50" alt="">
                                                <h3>هژار نعمتی</h3>
                                                <h5>نویسنده و تحلیل گر</h5>
                                                <p>
                                                      وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه
                                                      گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به
                                                      پایان برند.
                                                </p>
                                                <div class="d-flex flex-row justify-content-center">
                                                      <div class="p-2">
                                                            <a href="#">
                                                                  <i class="fab fa-twitter-square"></i>
                                                            </a>
                                                      </div>
                                                      <div class="p-2">
                                                            <a href="#">
                                                                  <i class="fab fa-instagram"></i>
                                                            </a>
                                                      </div>
                                                      <div class="p-2">
                                                            <a href="#">
                                                                  <i class="fab fa-facebook-square"></i>
                                                            </a>
                                                      </div>
                                                      <div class="p-2">
                                                            <a href="#">
                                                                  <i class="fab fa-youtube-square"></i>
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-g-3 col-md-3 author">
                                    <div class="card">
                                          <div class="card-body">
                                                <img src="images/person/1.jpg" class="img-fluid rounded-circle w-50" alt="">
                                                <h3>هژار نعمتی</h3>
                                                <h5>نویسنده و تحلیل گر</h5>
                                                <p>
                                                      وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه
                                                      گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به
                                                      پایان برند.
                                                </p>
                                                <div class="d-flex flex-row justify-content-center">
                                                      <div class="p-2">
                                                            <a href="#">
                                                                  <i class="fab fa-twitter-square"></i>
                                                            </a>
                                                      </div>
                                                      <div class="p-2">
                                                            <a href="#">
                                                                  <i class="fab fa-instagram"></i>
                                                            </a>
                                                      </div>
                                                      <div class="p-2">
                                                            <a href="#">
                                                                  <i class="fab fa-facebook-square"></i>
                                                            </a>
                                                      </div>
                                                      <div class="p-2">
                                                            <a href="#">
                                                                  <i class="fab fa-youtube-square"></i>
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <!-- Auther -->
      <!-- Footer -->
      <footer>
            <div id="footer_div" class="row justify-content-center" style=" margin-left: auto;">
                  <div class="col-md-5 text-center">

                        <h2>سایت مرگور توریسم</h2>
                        <p>لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و بی‌معنی در صنعت چاپ،
                              صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی
                              برای
                        </p>
                        <p>تلفن پشتیبانی : <span>*******0914</span></p>

                        <p>ایمیل پشتیبانی : hazharg122@gmail.com</p>
                        <a href="#">
                              <i class="fab fa-twitter-square"></i>
                        </a>
                        <a href="#">
                              <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                              <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="#">
                              <i class="fab fa-youtube-square"></i>
                        </a>
                        <hr class="footer-hr">
                        کلیه حقوق مادی و معنوی این سایت متعلق به سایت <a href="#" class="sitename-title">مرگور توریسم
                        </a> است
                        <br>
                        <a href="pags/login/login.html" class="admin">ورود ادمین</a>

                  </div>
            </div>
      </footer>
</body>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="js/script.js"></script>


</html>