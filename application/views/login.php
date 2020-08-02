
<?PHP defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMASET</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Agung Nugroho">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="apple-touch-icon" href="<?PHP echo base_url();?>assets/img/favicon.png">
  <link rel="icon" href="<?PHP echo base_url();?>assets/images/ico.svg">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic'>
  <link rel='stylesheet' href='<?PHP echo base_url();?>assets/css/bootstrap.min.css'>
  <link rel='stylesheet' href='<?PHP echo base_url();?>assets/css/vendor.css'>
  <link rel='stylesheet' href='<?PHP echo base_url();?>assets/css/theme-3.css' id="theme">
  <link rel='stylesheet' href='<?PHP echo base_url();?>assets/css/custom.css'>
  <script src='<?PHP echo base_url();?>assets/js/modernizr-2.8.3.min.js'></script>
</head>
<body>
<!-- 
======================================================
created     : Lalat Merah
situs       : wp.icmp.my.id
whatsapp    : 082-120-215-248
ig          : @alpuketmerah
====================================================== 
-->

   <!-- .page-loader -->

  <header id="siteHeader" class="site-header site-header-fixed-top">
    <nav id="siteNavbar" class="navbar navbar-default navbar-fixed-top site-navbar-from-light-fg">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle-icon navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon ti-layout-grid3-alt"></span>
          </button>

          <a class="navbar-brand" href="<?PHP echo base_url()?>">
            <p>SIMASET</p>
          </a>
        </div> <!-- .navbar-header -->

        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a data-smooth-scroll="true" href="#home">Home</a></li>
            <li><a data-smooth-scroll="true" href="#screenshot">How To Use</a></li>
            <li><a data-smooth-scroll="true" href="#contact">Contact</a></li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div>
    </nav>
  </header> <!-- .site-header -->

  <div class="main">
    <div id="home" class="home-section home-hero align-outer bg-theme-1">

      <div id="homeBgImg" data-bg-img="<?PHP echo base_url();?>media/index-layout-1-bg-img+animated-gradient.jpg"></div> <!-- #homeBgImg -->

      <div id="homeBgAnimatedGradient" data-opacity=".8"></div> <!--- #homeBgAnimatedGradient -->

      <div class="align-inner align-middle">
        <div class="container">
          <div class="home-row row">
            <div class="home-left-col col-sm-6">
              <h1 class="text-animate section-title">Now</h1>
              <h1 class="text-animate section-title">It's easy for your</h1>
              <h1 class="text-animate section-title">asset</h1>
              <p class="text-animate">This system makes it easy to record assets in your company</p>
              <div class="col-sm-6">
        
                <form id="CheckAset" class="form home-subscribe-form" role="form" method="POST" action="Signin/cariAset">
              
              <input id="kode_aset" class="form-control" type="text" placeholder="Checking Your Asset" name="kode_aset">
              </div>
              <div class="col-sm-6">
                <div class="btn-wrap">
                  <button type="submit" class="btn btn-primary" title="cek" id="submit" name="submit">Check</button>
              </form>
                </div>
              </div>
            </div> <!-- .home-left-col -->

            <div class="home-form-col col-sm-6 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2">
              <div class="panel panel-theme-2">
                <div class="panel-heading">
                  <h5></h5>
                </div>

                <div class="panel-body">
                  <form name="loginform" id="loginform" method="post" class="form home-subscribe-form form-lite" action="<?PHP echo base_url('index.php/Signin/login');?>">

                    <div class="row">
                      <div class="form-group col-sm-12">
                        <label for="inputUser">Username</label>
                        <input class="form-control" 
                        data-validation="length alphanumeric" 
                        data-validation-length="1-30" 
                        placeholder="Nama Pengguna" 
                        data-validation-error-msg="Nama pengguna harus diisi, antara 8 sd 30 karakter." 
                        type="text" 
                        name="username">
                      </div>
                      <div class="form-group col-sm-12">
                        <label for="inputPassword">Password</label>
                        <input class="form-control" 
                        data-validation="length alphanumeric" 
                        data-validation-length="1-30" 
                        placeholder="Kata sandi" 
                        data-validation-error-msg="Kata sandi harus diisi, antara 8 sd 30 karakter." 
                        type="password" 
                        name="password">
                      </div>
                      
                      <div class="form-group col-sm-12">
                        <?PHP if($this->session->flashdata("msg")){?>
                  <div id="alert_area" class="alert alert-danger fade in"><span id="alert_text"><?PHP echo $this->session->flashdata("msg");?></span></div>
                  <?PHP }?>
                        <button type="submit" class="btn btn-block btn-lg btn-theme-2" data-text-loading="Memproses..." id="submit">Login</button>
                       </form>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div> <!-- .home-form-col -->
          </div>
        </div>
      </div>
    </div> <!-- #home-->

    

    
          

    

    <div id="screenshot" class="screenshot-section">
      <div class="container">
        <div class="screenshot-title-row row">
          <div class="screenshot-title-col col-sm-8 col-sm-offset-2">
            <h2 class="section-title"><b>Aplikasi SIMASET</b> Sangat mudah.</h2>

            <p class="text-lead">Menggunakan SIMASET sangat <b>mudah</b>, dengan pengenalan fungsi aplikasi serta training kurang dari 1 hari user sudah dapat menggunakan SIMASET</p>
          </div> <!-- .screenshot-title-col -->
        </div> <!-- .screenshot-title-row -->

        <div id="screenshotCarousel" class="popup-gallery bfc-carousel wow fadeIn">
          <div class="bfc-carousel-item popup-gallery-item">
            <a class="bfc-carousel-item-link popup-gallery-link" href="<?PHP echo base_url();?>assets/img/screenshot/1.png" title="Media title"> <!-- popup media -->
              <div class="bfc-carousel-item-media">
                <img class="bfc-carousel-item-media-img" src="<?PHP echo base_url();?>assets/img/screenshot/1.png" alt=""> <!-- preview media -->
              </div>
            </a>
          </div> <!-- .bfc-carousel-item -->

          <div class="bfc-carousel-item popup-gallery-item">
            <a class="bfc-carousel-item-link popup-gallery-link" href="<?PHP echo base_url();?>assets/img/screenshot/2.png" title="Media title"> <!-- popup media -->
              <div class="bfc-carousel-item-media">
                <img class="bfc-carousel-item-media-img" src="<?PHP echo base_url();?>assets/img/screenshot/2.png" alt=""> <!-- preview media -->
              </div>
            </a>
          </div> <!-- .bfc-carousel-item -->

          <div class="bfc-carousel-item popup-gallery-item">
            <a class="bfc-carousel-item-link popup-gallery-link" href="<?PHP echo base_url();?>assets/img/screenshot/3.png" title="Media title"> <!-- popup media -->
              <div class="bfc-carousel-item-media">
                <img class="bfc-carousel-item-media-img" src="<?PHP echo base_url();?>assets/img/screenshot/3.png" alt=""> <!-- preview media -->
              </div>
            </a>
          </div> <!-- .bfc-carousel-item -->

          <div class="bfc-carousel-item popup-gallery-item">
            <a class="bfc-carousel-item-link popup-gallery-link" href="<?PHP echo base_url();?>assets/img/screenshot/4.png" title="Media title"> <!-- popup media -->
              <div class="bfc-carousel-item-media">
                <img class="bfc-carousel-item-media-img" src="<?PHP echo base_url();?>assets/img/screenshot/4.png" alt=""> <!-- preview media -->
              </div>
            </a>
          </div> <!-- .bfc-carousel-item -->
        </div>
      </div>
    </div> <!-- #screenshot-->

    <div id="contact" class="contact-section">
      <div class="container">
        <div class="contact-title-row row">
          <div class="contact-title-col col-sm-8 col-sm-offset-2">
            <h2 class="section-title"><b>Info Lebih Lanjut</b>.</h2>
            <p class="text-lead">untuk mengetahui lebih lanjut mengenai aplikasi <b>SIMASET</b> silahkan menghubungi kontak yang ada dibawah ini</p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="contact-content-row row">
          <div class="contact-left-col col-sm-6 col-md-5">
            <div class="panel panel-theme-1">
              <div class="panel-heading">
                <h5>Temukan kami dalam peta sederhana ini</h5>
              </div>

              <div class="panel-body">
                <div class="flexible-widgets row popup-gallery">
                  <div class="widget-wrap">
                    <div class="textwidget">
                      <div class="card card-light">
                        <div class="card-media"><a href="<?PHP echo base_url();?>assets/img/map.png" class="popup-gallery-link"><img src="<?PHP echo base_url();?>assets/img/map.png" alt="" class="card-img" style="width: 100%;"></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="contact-info-col col-sm-5 col-sm-offset-1 col-md-offset-2">
            <p class="text-lead">Jangan sungkan untuk menghubungi kami.</p>

            <div class="contact-info">
              <ul class="media-list">
                <li class="media">
                  <div class="media-left">
                    <img class="media-object" src="<?PHP echo base_url();?>assets/img/contact/location-icon.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Lokasi</h4>
                    <p>Kabupaten Tangerang, Banten</p>
                  </div>
                </li>

                <li class="media">
                  <div class="media-left">
                    <img class="media-object" src="<?PHP echo base_url();?>assets/img/contact/phone-icon.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Telepon Kami</h4>
                    <p>
                      +62 81-XXX-XXX-XXX
                      <br>
                      +62 82-XXX-XXX-XXX
                    </p>
                  </div>
                </li>

                <li class="media">
                  <div class="media-left">
                    <img class="media-object" src="<?PHP echo base_url();?>assets/img/contact/email-icon.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Email Kami</h4>
                    <p>
                      info@global.ac.id
                      <br>
                      support@global.ac.id
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- #contact -->
  </div>

  <footer class="site-footer">
    <div id="siteFooterBottom" class="site-footer-bottom-section">
      <div class="container">
        <div class="site-footer-bottom-border"></div>
        <div class="row">
          <div class="site-footer-bottom-left-col col-md-6">
            <div class="site-footer-brand">
              SIMASET <span>Aplikasi Sistem Informasi Aset</span>
            </div>

            <div class="site-footer-bottom-info">
              <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#feature1">Checking</a></li>
                <li><a href="#screenshot">How To Use</a></li>
              </ul>
            </div>
          </div>

          <div class="site-footer-bottom-right-col col-md-6">
            <ul class="site-footer-bottom-social-list">
              <li class="wow fadeInRight"><a href="https://facebook.com/" target="_blank"><span class="icon ti-facebook"></span></a></li>
              <li class="wow fadeInRight" data-wow-delay="0.1s"><a href="https://twitter.com/" target="_blank"><span class="icon ti-twitter-alt"></span></a></li>
              <li class="wow fadeInRight" data-wow-delay="0.2s"><a href="https://www.pinterest.com/" target="_blank"><span class="icon ti-pinterest-alt"></span></a></li>
              <li class="wow fadeInRight" data-wow-delay="0.3s"><a href="https://github.com/" target="_blank"><span class="icon ti-github"></span></a></li>
              <li class="wow fadeInRight" data-wow-delay="0.4s"><a href="https://www.linkedin.com/" target="_blank"><span class="icon ti-linkedin"></span></a></li>
            </ul>
            <div class="site-footer-bottom-copyright">Copyright © 2020 . All Rights Reserved.</div>
          </div>
        </div>
      </div>
    </div> <!-- #siteFooterBottom -->
  </footer>


  <div id="show_modal" class="modal fade" role="dialog" style="background: #000;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 style="font-size: 24px; color: #17919e; text-shadow: 1px 1px #ccc;"><i class="fa fa-folder"></i> Aset Details</h3>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-striped">
          <thead class="btn-primary">
            <tr>
              <th>Kode Aset</th>
              <th>Nama Barang</th>
              <th>Tipe Barang</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><p id="kode_aset"></p></td> //here i am showing the data with the help of id
              <td><p id="nama_barang"></p></td>//here i am showing the data with the help of id
              <td><p id="tipe_barang"></p></td>//here i am showing the data with the help of id
            </tr>
          </tbody>
       </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
      </div>
    </div>
  </div>
</div>


  <script src='<?PHP echo base_url();?>assets/js/jquery-1.11.3.min.js'></script>
  <script src='<?PHP echo base_url();?>assets/js/bootstrap.min.js'></script>
  <script src='<?PHP echo base_url();?>assets/js/vendor.js'></script>
  <script src='<?PHP echo base_url();?>assets/js/main.js'></script>
  <script src='<?PHP echo base_url();?>assets/js/map.js'></script>

</body>
</html>
<!-- 
======================================================
created     : Lalat Merah
situs       : wp.icmp.my.id
whatsapp    : 082-120-215-248
ig          : @alpuketmerah
====================================================== 
-->