<?php require_once("config.php");
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_POST["login"])) {
    $sql = "SELECT * FROM pemilik WHERE username='$_POST[username]' AND password='".md5($_POST["password"])."'";
    if ($query = $connection->query($sql)) {
        if ($query->num_rows) {
            while ($data = $query->fetch_array()) {
              $_SESSION["is_logged"] = true;
              $_SESSION["id"] = $data["id_pemilik"];
              $_SESSION["nama"] = $data["nama"];
              $_SESSION["username"] = $data["username"];
            }
            header('location: ?page=kost');
        } else {
            echo alert("Username / Password tidak sesuai!", "index.php");
        }
    } else {
        echo "Query error!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <!-- footer-->
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="screen" />
 </script><link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
 <!-- footer-->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <title>SiKosan</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/populer.css">
  <link rel="stylesheet" href="css/footer.css">
  <link href="css/scrolling-nav.css" rel="stylesheet">
</head>
<body id="page-top" data-target=".navbar-fixed-top" ng-app="">

  <section class="nav-section">
    <nav class="navbar navbar-default navbar-doublerow navbar-trans navbar-fixed-top">
    <!-- top nav -->
    <nav class="navbar navbar-top hidden-xs">
      <div class="container">
        <!-- left nav top -->
        <ul class="nav navbar-nav pull-left">
          <li><span id="takeline">Situs cari kosan mudah & terpercaya</a></li>
        </ul>
        <!-- right nav top -->
        <ul class="nav navbar-nav pull-right">
          <li><a href="daftar.html" class="text-white">Daftar</a></li>
          <li><a href="login.html" class="text-white">Login</a></li>
        </ul>
        <ul class="nav navbar-nav pull-right">
        </ul>
      </div>
    </nav>
    <!-- down nav -->
    <nav class="navbar navbar-down" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="img/lg2.png" id="logoatas"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse hidden-xs" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="#populer">Populer</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#terbaru">Terbaru</a>
                    </li>
                    <li>
                        <div class="input-group page-scroll" id="adv-search">
                            <input type="text" class="form-control" placeholder="Search for " />
                            <div class="input-group-btn">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    </nav>
  </section>

  <!-- Page Content -->
      <div class="iklan">
          <div class="container">
                <div class="row">
                    <div class="col-md-3">
                    <p class="lead">Kategory Kos kosan</p>
                    <section id="filter" lang="en" ng-app="appShowHide">

                          <div class="row sample-show-hide" ng-hide="allFilter">
                              <div class="">
                                <div class="thumbnail">
                                  <h4>Penghuni</h4>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Laki-laki</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Perempuan</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Campur</label>
                                  </div>
                                </div>
                              </div>
                              <div class="">
                                <div class="thumbnail">
                                  <h4>Kontrak</h4>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Harian</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Bulanan</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Tahunan</label>
                                  </div>
                                </div>
                              </div>
                              <div class="">
                                <div class="thumbnail">
                                  <h4>Fasillitas</h4>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">AC</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Kulkas</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">TV</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Wifi</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Meja</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Kursi</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Parkir Motor</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Parkir Mobil</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Cleaning Service</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Kamar mandi dalam</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Shower</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Tempat tidur</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Security</label>
                                  </div>
                                </div>
                              </div>
                              <div class="">
                                <div class="thumbnail">
                                  <h4>Lokasi Dekat</h4>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Universitas Brwijaya</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Universitas Negri Malang</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Universitas Islam Negeri Maulana Malik Ibrahim Malang </label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Universitas Muhammadiyah Malang</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Universitas Merdeka Malang </label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Universitas Gajayana</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Universitas Islam Malang</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Universitas Kanjuruhan</label>
                                  </div><div class="checkbox">
                                    <label><input type="checkbox" value="">Universitas Machung </label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Institut Teknologi Malang</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Politeknik Negeri Malang</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">Politeknik Kesehatan Malang</label>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="row" id=btn-filter>
                              <div class="form-group">
                                  <button class="btn btn-info" type="submit" ng-click="allFilter=!allFilter">Show or Hide Category</button>
                              </div>
                          </div>
                    </section>

                    </div>

                    <div class="col-md-9">
                      <h3>Populer Kos kosan</h3>
                          <div class="row">
                              <div class="col-sm-4 col-lg-4 col-md-4">
                                <div class="thumbnail threed">
                                    <img src="img/bromo1.jpg" alt="">
                                    <div class="caption">
                                        <h4 class="pull-right" id="harga">Rp 650k /bulan</h4>
                                        <p class="ada"><span class="label label-info avaliable">Avaliable : 3</span></p>
                                        <p id="deskripsi">Kos cantik dan nyaman, secantik dirimu dan senyaman pelukanmu</p>
                                    </div>
                                    <div class="ratings">
                                        <p class="pull-right" id="review">156 reviews</p>
                                        <p>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                        </p>
                                    </div>
                                </div>
                              </div>
                              <div class="col-sm-4 col-lg-4 col-md-4">
                                <div class="thumbnail threed">
                                    <img src="img/bromo1.jpg" alt="">
                                    <div class="caption">
                                        <h4 class="pull-right" id="harga">Rp 650k /bulan</h4>
                                        <p class="ada"><span class="label label-info avaliable">Avaliable : 3</span></p>
                                        <p id="deskripsi">Kos cantik dan nyaman, secantik dirimu dan senyaman pelukanmu</p>
                                    </div>
                                    <div class="ratings">
                                        <p class="pull-right" id="review">156 reviews</p>
                                        <p>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                        </p>
                                    </div>
                                </div>
                              </div>
                              <div class="col-sm-4 col-lg-4 col-md-4">
                                <div class="thumbnail threed">
                                    <img src="img/bromo1.jpg" alt="">
                                    <div class="caption">
                                        <h4 class="pull-right" id="harga">Rp 650k /bulan</h4>
                                        <p class="ada"><span class="label label-info avaliable">Avaliable : 3</span></p>
                                        <p id="deskripsi">Kos cantik dan nyaman, secantik dirimu dan senyaman pelukanmu</p>
                                    </div>
                                    <div class="ratings">
                                        <p class="pull-right" id="review">156 reviews</p>
                                        <p>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                        </p>
                                    </div>
                                </div>
                              </div>
                              <div class="col-sm-4 col-lg-4 col-md-4">
                                <div class="thumbnail threed">
                                    <img src="img/bromo1.jpg" alt="">
                                    <div class="caption">
                                        <h4 class="pull-right" id="harga">Rp 650k /bulan</h4>
                                        <p class="ada"><span class="label label-info avaliable">Avaliable : 3</span></p>
                                        <p id="deskripsi">Kos cantik dan nyaman, secantik dirimu dan senyaman pelukanmu</p>
                                    </div>
                                    <div class="ratings">
                                        <p class="pull-right" id="review">156 reviews</p>
                                        <p>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                        </p>
                                    </div>
                                </div>
                              </div>
                          </div>
                    </div>
                </div>

          </div>
      </div>

      <section id="page">
        <div class="container">
          <div class="page-nation">
              <ul class="pagination pagination-large pull-right">
                  <li class="disabled"><span><<</span></li>
                  <li class="active"><span>1</span></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">6</a></li>
                  <li><a href="#">7</a></li>
                  <li><a href="#">8</a></li>
                  <li><a href="#">9</a></li>
                  <li class="disabled"><span>...</span></li><li>
                  <li><a rel="next" href="#">Next</a></li>
              </ul>
          </div>
        </div>
      </section>

      <section id="footer">
        <footer>
           <div class="container">
             <div class="row text-center">
                     <div class="col-md-6 col-sm-6 col-xs-12">
                          <ul class="menu list-inline">
                              <li>
                                <a href="#"><img src="img/logoblue.png" id="logobawah" alt=""></a>
                              </li>
                         </ul>
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                          <ul class="list-inline">
                                 <li>
                                      <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                                 </li>
                                 <li>
                                      <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                                 </li>
                                 <li>
                                      <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                                 </li>
                                 <li>
                                      <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                                </li>
                           </ul>
                     </div>
               </div>
            </div>
        </footer>
        <div class="copyright">
         <div class="container">
             <div class="row text-center">
               <p>Kelompok 6 | IMK</p>
             	<p>Copyright 2017 All rights reserved</p>
             </div>
     	   </div>
        </div>
      </section>

      <!-- jQuery -->

      <script src="js/jquery.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="js/slider.js"></script>
      <script src="js/login.js"></script>
      <script src="js/main.js"></script>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js "></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
      <script src="js/angular-animate.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/filter.js"></script>
      <script src="js/controller.js"></script>
      <script src="js/jquery.easing.min.js"></script>
      <script src="js/scrolling-nav.js"></script>
      <script src="js/hide.js"></script>

      <!-- Script to Activate the Carousel -->

</body>
</html>
