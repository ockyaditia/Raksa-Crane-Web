<?php
include("../../include/session.php");
include("../root.php");
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

  <title>Halaman Posting | RWK</title>

  <link rel="apple-touch-icon" href="<?php echo ROOT_URL; ?>/resource/assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo ROOT_URL; ?>/resource/assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/css/site.min.css">

  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/flag-icon-css/flag-icon.css">

  <!-- Plugin -->
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/chartist-js/chartist.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/aspieprogress/asPieProgress.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/footable/footable.core.css">

  <!-- Page -->
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/css/dashboard/v2.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
 <style>
    /* for demo */
    
    .example-modal {
      display: block;
      width: 100%;
      padding: 35px 15px;
      background-color: #f3f7f9;
    }
    
    .example-modal .modal {
      position: relative;
      top: auto;
      right: auto;
      bottom: auto;
      left: auto;
      z-index: 1;
      display: block;
    }
    
    .example-modal .modal .modal-dialog {
      width: auto;
      max-width: 600px;
      margin: 15px auto;
    }
    
    .example-modal-top .center {
      top: 0;
      -webkit-transform: translate(-50%, 0px);
      -ms-transform: translate(-50%, 0px);
      -o-transform: translate(-50%, 0px);
      transform: translate(-50%, 0px);
    }
    
    .example-modal-bottom .center {
      top: auto;
      bottom: 0;
      -webkit-transform: translate(-50%, 0px);
      -ms-transform: translate(-50%, 0px);
      -o-transform: translate(-50%, 0px);
      transform: translate(-50%, 0px);
    }
    
    .example-modal-sidebar .center {
      top: 0;
      right: 5px;
      left: auto;
      -webkit-transform: none;
      -ms-transform: none;
      -o-transform: none;
      transform: none;
    }
    
    .color-selector > li {
      margin-right: 20px;
    }
  </style>


  <!--[if lt IE 9]>
    <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/media-match/media.match.min.js"></script>
    <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/modernizr/modernizr.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body>
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
        <img class="navbar-brand-logo" src="<?php echo ROOT_URL; ?>/resource/assets/images/logo.png" title="Remark">
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
                <img src="<?php echo ROOT_URL; ?>/resource/assets/portraits/5.jpg" alt="...">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="<?php echo ROOT_URL; ?>/pembayaran/index.php" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Pembayaran</a>
              </li>
              <li role="presentation">
                <a href="<?php echo ROOT_URL; ?>/setting/index.php" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="../../process.php" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
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
            <li class="site-menu-item">
              <a href="<?php echo ROOT_URL; ?>/index.php" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
              </a>
            </li>
            
			 <li class="site-menu-item">
              <a href="<?php echo ROOT_URL; ?>/conversation/index.php" data-slug="conversation">
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
                  <a class="animsition-link" href="<?php echo ROOT_URL; ?>/produk/index.php" data-slug="produk-semua">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Semua Produk</span>
                  </a>
                </li>
				 <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo ROOT_URL; ?>/produk/tambah.php" data-slug="produk-tambah">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tambah Produk</span>
                  </a>
                </li>
				 <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo ROOT_URL; ?>/produk/kategori.php" data-slug="produk-kategori">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Kategori</span>
                  </a>
                </li>
               
                  </ul>
                </li>
				
				<li class="site-menu-item has-sub active open">
              <a href="javascript:void(0)" data-slug="blog">
                <i class="site-menu-icon wb-book" aria-hidden="true"></i>
                <span class="site-menu-title">Blog</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item active">
                  <a class="animsition-link" href="index.php" data-slug="blog-semua">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Semua Posting</span>
                  </a>
                </li>
				 <li class="site-menu-item">
                  <a class="animsition-link" href="tambah.php" data-slug="blog-tambah">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tambah Post</span>
                  </a>
                </li>
				 <li class="site-menu-item">
                  <a class="animsition-link" href="kategori.php" data-slug="blog-kategori">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Kategori</span>
                  </a>
                </li>
               
                  </ul>
                </li>
				<li class="site-menu-item">
              <a href="<?php echo ROOT_URL; ?>/users/index.php" data-slug="users">
                <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                <span class="site-menu-title">Users</span>
              </a>
            </li>
			<li class="site-menu-category">Configuration</li>
					<li class="site-menu-item active open">
						<a href="index.php" data-slug="setting">
						<i class="site-menu-icon wb-settings" aria-hidden="true"></i>
						<span class="site-menu-title">Settings</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a href="<?php echo ROOT_URL; ?>/pembayaran/index.php" data-slug="pembayaran">
						<i class="site-menu-icon wb-payment" aria-hidden="true"></i>
						<span class="site-menu-title">Pembayaran</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a href="<?php echo ROOT_URL; ?>/update/index.php" data-slug="update">
						<i class="site-menu-icon wb-info" aria-hidden="true"></i>
						<span class="site-menu-title">Update</span>
						</a>
					</li>
					
			
          </ul>
        </div>
      </div>
    </div>

    <div class="site-menubar-footer">
      <a href="../../" class="fold-show" data-placement="top" data-toggle="tooltip"
      data-original-title="Beranda">
        <span class="icon wb-home" aria-hidden="true"></span>
      </a>
      <a href="<?php echo ROOT_URL; ?>/setting/" data-placement="top" data-toggle="tooltip" data-original-title="Settings">
        <span class="icon wb-settings" aria-hidden="true"></span>
      </a>
      <a href="../../process.php" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon wb-power" aria-hidden="true"></span>
      </a>
    </div>
  </div>
  


  <!-- Page -->
  <div class="page animsition">
   
    <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
		<div class="page-header">
      <h1 class="page-title">Daftar Post</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo ROOT_URL; ?>/index.php">Dashboard</a></li>
        <li class="active">Daftar Post</li>
      </ol>
      <div class="page-header-actions">
        <a class="btn btn-sm btn-default btn-outline btn-round" href="tambah.php"
        target="_blank">
          <i class="icon wb-plus" aria-hidden="true"></i>
          <span class="hidden-xs">Tambah Post</span>
        </a>
      </div>
    </div>

     <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Semua Posting</h3>
            </header>
            <div class="panel-body">
              <table class="table table-bordered table-hover toggle-circle" id="exampleFootableFiltering">
                <thead>
                  <tr>
                    <th data-toggle="true">Judul</th>
                    <th>Kategori</th>
					<th>Tanggal</th>
					
                    <th data-hide="phone, tablet">Status</th>
					<th data-sort-ignore="true">Actions</th>
                  </tr>
                </thead>
                <div class="form-inline padding-bottom-15">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Status</label>
                        <select id="filteringStatus" class="form-control">
                          <option value="">Tampilkan Semua</option>
                          <option value="active">Aktif</option>
                          <option value="tidak aktif">Tidak Aktif</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6 text-right">
                      <div class="form-group">
                        <input id="filteringSearch" type="text" placeholder="Search" class="form-control"
                        autocomplete="off">
                      </div>
                    </div>
                  </div>
                </div>
                <tbody>
				<?php
				$get_product = "select * from blog order by rand() LIMIT 0,6";
	$run_product = mysql_query($get_product); 
	while ($row_products = mysql_fetch_array($run_product))
	{
			$blog_id = $row_products['blog_id'];
			$blog_judul = $row_products['blog_judul'];
			$blog_kategori = $row_products['category_id'];
			$blog_tanggal = $row_products['blog_date'];
			$blog_published = $row_products['blog_published'];
			$get_cat = "select * from blog_categories WHERE cat_id='$blog_kategori'";
	$run_cat = mysql_query($get_cat); 
	while ($row_cats = mysql_fetch_array($run_cat))
	{
			$blog_kategori = $row_cats['cat_title'];
	}
			
				echo "
				<tr>
                    <td>$blog_judul</td>
                    <td>$blog_kategori</td>
					<td>$blog_tanggal</td>
                    ";
					
					if($blog_published==1)
						{
						echo " 
							<td>
								<span class='label label-table label-success'>Active</span>
							</td> 
							";
						}
					else
						{
						echo " 
							<td>
								<span class='label label-table label-warning'>Tidak Aktif</span>
							</td> 
							";
						}
					echo "
					<td>
						<a href='edit.php?blog_id=$blog_id' class='btn btn-icon btn-default btn-outline' data-placement='top' data-toggle='tooltip' data-original-title='Edit'>
							<span class='icon wb-edit' aria-hidden='true'></span>
						</a>
					";
					
					if($blog_published==1)
					{
					echo "
					<a href='edit.php?non_aktifkan=$blog_id' class='btn btn-icon btn-default btn-outline' data-placement='top' data-toggle='tooltip' data-original-title='Non Aktifkan'>
							<span class='icon wb-trash' aria-hidden='true'></span>
						</a>
					</td>
					</tr>
					";
					}
					else{
					echo "
					<a href='edit.php?aktifkan=$blog_id' class='btn btn-icon btn-default btn-outline' data-placement='top' data-toggle='tooltip' data-original-title='Aktifkan'>
							<span class='icon wb-cloud' aria-hidden='true'></span>
						</a>
					</td>
					</tr>
					";
					}
               }   
				
				?>
                 
                 
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="5">
                      <div class="text-right">
                        <ul class="pagination"></ul>
                      </div>
                    </td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>   
       

       

        
      </div>
    </div>
  </div>
  <!-- End Page -->

  


  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">&copy 2015 RWK</span>
    <div class="site-footer-right">
      Crafted with <i class="red-600 wb wb-heart"></i> by <a href="http://www.geekwebservice.uk">Geek Web Service</a>
    </div>
  </footer>

  <!-- Core  -->
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/jquery/jquery.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/bootstrap/bootstrap.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/animsition/jquery.animsition.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

  <!-- Plugins -->
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/intro-js/intro.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/screenfull/screenfull.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/slidepanel/jquery-slidePanel.js"></script>
  
   <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/footable/footable.all.min.js"></script>

  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/chartist-js/chartist.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/aspieprogress/jquery-asPieProgress.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/gmaps/gmaps.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/matchheight/jquery.matchHeight-min.js"></script>

  <!-- Scripts -->
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/core.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/site.js"></script>

  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/sections/menu.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/sections/menubar.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/sections/sidebar.js"></script>

  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/configs/config-colors.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/configs/config-tour.js"></script>

  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/asscrollable.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/animsition.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/slidepanel.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/switchery.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/gmaps.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/matchheight.js"></script>
<script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

      // Example Row Toggler
      // -------------------
      (function() {
        $('#exampleRowToggler').footable();
      })();

      // Expand / Collapse All Rows
      // --------------------------
      (function() {
        var fooColExp = $('#exampleAccordion');
        fooColExp.footable().trigger('footable_expand_first_row');

        $('#exampleCollapseBtn').on('click', function() {
          fooColExp.trigger('footable_collapse_all');
        });
        $('#exampleExpandBtn').on('click', function() {
          fooColExp.trigger('footable_expand_all');
        })
      })();

      // Accordion
      // ---------
      (function() {
        $('#exampleFooAccordion').footable().on('footable_row_expanded',
          function(e) {
            $('#exampleFooAccordion tbody tr.footable-detail-show').not(
              e.row).each(function() {
              $('#exampleFooAccordion').data('footable').toggleDetail(
                this);
            });
          });
      })();

      // Pagination
      // ----------
      (function() {
        $('#examplePagination').footable();
        $('#exampleShow').change(function(e) {
          e.preventDefault();
          var pagesize = $(this).find('option:selected').val();
          $('#examplePagination').data('page-size', pagesize);
          $('#examplePagination').trigger('footable_initialized');
        });
      })();

      // Filtering
      // ---------
      (function() {
        var filtering = $('#exampleFootableFiltering');
        filtering.footable().on('footable_filtering', function(e) {
          var selected = $('#filteringStatus').find(':selected').val();
          e.filter += (e.filter && e.filter.length > 0) ? ' ' +
            selected : selected;
          e.clear = !e.filter;
        });

        // Filter status
        $('#filteringStatus').change(function(e) {
          e.preventDefault();
          filtering.trigger('footable_filter', {
            filter: $(this).val()
          });
        });

        // Search input
        $('#filteringSearch').on('input', function(e) {
          e.preventDefault();
          filtering.trigger('footable_filter', {
            filter: $(this).val()
          });
        });
      })();

      // Add & Remove Row
      // ----------------
      (function() {
        var addrow = $('#exampleFooAddRemove');
        addrow.footable().on('click', '.delete-row-btn', function() {

          //get the footable object
          var footable = addrow.data('footable');

          //get the row we are wanting to delete
          var row = $(this).parents('tr:first');

          //delete the row
          footable.removeRow(row);
        });

        // Search input
        $('#addRemoveSearch').on('input', function(e) {
          e.preventDefault();

          addrow.trigger('footable_filter', {
            filter: $(this).val()
          });
        });

        // Add Row Button
        $('#addRowBtn').click(function() {

          //get the footable object
          var footable = addrow.data('footable');

          //build up the row we are wanting to add
          var newRow =
            '<tr><td><button class="btn btn-icon btn-danger btn-outline btn-round btn-xs demo-delete-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button></td><td>Adam</td><td>Doe</td><td>Traffic Court Referee</td><td>22 Jun 1972</td><td><span class="label label-table label-success">Active</span></td></tr>';

          //add it
          footable.appendRow(newRow);
        });
      })();

    })(document, window, jQuery);
  </script>

  
</body>

</html>

<?php
}
else
{
echo "<script>window.open('../../index.php','_self')</script>";
}

?>