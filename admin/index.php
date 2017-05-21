<?php
include("../include/session.php");
if($session->isAdmin()){

?>
<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="gws cms">
  <meta name="author" content="">

  <title>Dashboard | RWK</title>

  <link rel="apple-touch-icon" href="resource/assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="resource/assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="resource/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="resource/assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="resource/assets/css/site.min.css">

  <link rel="stylesheet" href="resource/assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="resource/assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="resource/assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="resource/assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="resource/assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="resource/assets/vendor/flag-icon-css/flag-icon.css">

  <!-- Plugin -->
  <link rel="stylesheet" href="resource/assets/vendor/chartist-js/chartist.css">
  <link rel="stylesheet" href="resource/assets/vendor/aspieprogress/asPieProgress.css">

  <!-- Page -->
  <link rel="stylesheet" href="resource/assets/css/dashboard/v2.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="resource/assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="resource/assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="resource/assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="resource/assets/vendor/media-match/media.match.min.js"></script>
    <script src="resource/assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="resource/assets/vendor/modernizr/modernizr.js"></script>
  <script src="resource/assets/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      
      <div class="navbar-brand navbar-brand-center">
        <img class="navbar-brand-logo" src="resource/assets/images/logo.png" title="Remark">
        <span class="navbar-brand-text"> RWK</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <span class="avatar avatar-online">
                <img src="resource/assets/portraits/5.jpg" alt="...">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="pembayaran/index.php" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Pembayaran</a>
              </li>
              <li role="presentation">
                <a href="setting/index.php" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="../process.php" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

    </div>
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">General</li>
            <li class="site-menu-item active open">
              <a href="index.php" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
              </a>
            </li>
			
			 <li class="site-menu-item">
              <a href="conversation/index.php" data-slug="conversation">
                <i class="site-menu-icon wb-chat" aria-hidden="true"></i>
                <span class="site-menu-title">Conversation</span>
              </a>
            </li>
            
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="produk">
                <i class="site-menu-icon wb-table" aria-hidden="true"></i>
                <span class="site-menu-title">Produk</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="produk/index.php" data-slug="produk-semua">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Semua Produk</span>
                  </a>
                </li>
				 <li class="site-menu-item">
                  <a class="animsition-link" href="produk/tambah.php" data-slug="produk-tambah">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tambah Produk</span>
                  </a>
                </li>
				 <li class="site-menu-item">
                  <a class="animsition-link" href="produk/kategori.php" data-slug="produk-kategori">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Kategori</span>
                  </a>
                </li>
               
                  </ul>
                </li>
				
				 <li class="site-menu-item">
              <a href="order/index.php" data-slug="order">
                <i class="site-menu-icon wb-shopping-cart" aria-hidden="true"></i>
                <span class="site-menu-title">Order</span>
              </a>
            </li>
			
				<li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="blog">
                <i class="site-menu-icon wb-book" aria-hidden="true"></i>
                <span class="site-menu-title">Blog</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="blog/index.php" data-slug="blog-semua">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Semua Posting</span>
                  </a>
                </li>
				 <li class="site-menu-item">
                  <a class="animsition-link" href="blog/tambah.php" data-slug="blog-tambah">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tambah Post</span>
                  </a>
                </li>
				 <li class="site-menu-item">
                  <a class="animsition-link" href="blog/kategori.php" data-slug="blog-kategori">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Kategori</span>
                  </a>
                </li>
               
                  </ul>
                </li>
				<li class="site-menu-item ">
              <a href="users/index.php" data-slug="users">
                <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                <span class="site-menu-title">Users</span>
              </a>
            </li>
				
				
				
				<li class="site-menu-category">Configuration</li>
					<li class="site-menu-item">
						<a href="setting/index.php" data-slug="setting">
						<i class="site-menu-icon wb-settings" aria-hidden="true"></i>
						<span class="site-menu-title">Settings</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a href="pembayaran/index.php" data-slug="pembayaran">
						<i class="site-menu-icon wb-payment" aria-hidden="true"></i>
						<span class="site-menu-title">Pembayaran</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a href="update/index.php" data-slug="update">
						<i class="site-menu-icon wb-info" aria-hidden="true"></i>
						<span class="site-menu-title">Update</span>
						</a>
					</li>
					
					
					
              </ul>
			
        </div>
      </div>
    </div>

    <div class="site-menubar-footer">
      <a href="../" class="fold-show" data-placement="top" data-toggle="tooltip"
      data-original-title="Beranda">
        <span class="icon wb-home" aria-hidden="true"></span>
      </a>
      <a href="setting/index.php" data-placement="top" data-toggle="tooltip" data-original-title="Settings">
        <span class="icon wb-settings" aria-hidden="true"></span>
      </a>
      <a href="../process.php" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon wb-power" aria-hidden="true"></span>
      </a>
    </div>
  </div>
  


  <!-- Page -->
  <div class="page">
    <div class="page-header padding-0">
      <div class="widget widget-article type-flex">
        <div class="widget-header cover overlay">
          <img class="cover-image height-300" src="resource/assets/example-images/korla_panorama_large.jpg"
          alt="">
          <div class="overlay-panel text-center vertical-align">
            <div class="widget-metas vertical-align-middle blue-grey-800">
              <div class="widget-title font-size-50 margin-bottom-35 white-800">Raksa Wastu Kencana</div>
              <ul class="list-inline font-size-14">
                <li>
                  <i class="icon wb-map margin-right-5 white" aria-hidden="true"></i><font style="color:white;">                  Cikarang Pusat, Bekasi.</font>
                </li>
               
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
       

        

       

        



       

       

        
      </div>
    </div>
  </div>
  <!-- End Page -->

  


  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2015 RWK</span>
    <div class="site-footer-right">
      Crafted with <i class="red-600 wb wb-heart"></i> by <a href="http://www.geekwebservice.uk">Geek Web Service</a>
    </div>
  </footer>

  <!-- Core  -->
  <script src="resource/assets/vendor/jquery/jquery.js"></script>
  <script src="resource/assets/vendor/bootstrap/bootstrap.js"></script>
  <script src="resource/assets/vendor/animsition/jquery.animsition.js"></script>
  <script src="resource/assets/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="resource/assets/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="resource/assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="resource/assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

  <!-- Plugins -->
  <script src="resource/assets/vendor/switchery/switchery.min.js"></script>
  <script src="resource/assets/vendor/intro-js/intro.js"></script>
  <script src="resource/assets/vendor/screenfull/screenfull.js"></script>
  <script src="resource/assets/vendor/slidepanel/jquery-slidePanel.js"></script>

  <script src="resource/assets/vendor/chartist-js/chartist.min.js"></script>
  <script src="resource/assets/vendor/aspieprogress/jquery-asPieProgress.min.js"></script>
  <script src="resource/assets/vendor/gmaps/gmaps.js"></script>
  <script src="resource/assets/vendor/matchheight/jquery.matchHeight-min.js"></script>

  <!-- Scripts -->
  <script src="resource/assets/js/core.js"></script>
  <script src="resource/assets/js/site.js"></script>

  <script src="resource/assets/js/sections/menu.js"></script>
  <script src="resource/assets/js/sections/menubar.js"></script>
  <script src="resource/assets/js/sections/sidebar.js"></script>

  <script src="resource/assets/js/configs/config-colors.js"></script>
  <script src="resource/assets/js/configs/config-tour.js"></script>

  <script src="resource/assets/js/components/asscrollable.js"></script>
  <script src="resource/assets/js/components/animsition.js"></script>
  <script src="resource/assets/js/components/slidepanel.js"></script>
  <script src="resource/assets/js/components/switchery.js"></script>
  <script src="resource/assets/js/components/gmaps.js"></script>
  <script src="resource/assets/js/components/matchheight.js"></script>
 <script>
    $(document).ready(function($) {

      Site.run();

      // widget-linearea
      (function() {
        var linearea = new Chartist.Line('#widgetLinearea .ct-chart', {
          labels: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
          series: [
            [0, 2.5, 2, 2.8, 2.6, 3.8, 0],
            [0, 1.4, 0.5, 2, 1.2, 0.9, 0]
          ]
        }, {
          low: 0,
          showArea: true,
          showPoint: false,
          showLine: false,
          fullWidth: true,
          chartPadding: {
            top: 0,
            right: 10,
            bottom: 0,
            left: 0
          },
          axisX: {
            showGrid: false,
            labelOffset: {
              x: -14,
              y: 0
            },
          },
          axisY: {
            labelOffset: {
              x: -10,
              y: 0
            },
            labelInterpolationFnc: function(num) {
              return num % 1 === 0 ? num : false;
            }
          }
        });
      })();
    });
  </script>

  
</body>

</html>

<?php
}
else
{
echo "<script>window.open('../index.php','_self')</script>";
}

?>