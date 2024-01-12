<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Hostplan - Web Domain Hosting WHMCS HTML5 Template" />
<meta name="keywords" content="hosting,domain,cloud,vps,shared,dadicated,reseller,wordpress hosting,ssd" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>SGPO Consulting</title>

<!-- Favicon and Touch Icons -->
<link href="<?=WEB_ROOT?>images/loader.png" rel="shortcut icon" type="image/png">
<link href="<?=WEB_ROOT?>images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="<?=WEB_ROOT?>images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="<?=WEB_ROOT?>images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="<?=WEB_ROOT?>images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="<?=WEB_ROOT?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?=WEB_ROOT?>css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?=WEB_ROOT?>css/animate.css" rel="stylesheet" type="text/css">
<link href="<?=WEB_ROOT?>css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="<?=WEB_ROOT?>css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?=WEB_ROOT?>css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?=WEB_ROOT?>css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?=WEB_ROOT?>css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?=WEB_ROOT?>css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="<?=WEB_ROOT?>js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="<?=WEB_ROOT?>js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="<?=WEB_ROOT?>js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="<?=WEB_ROOT?>css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?=WEB_ROOT?>js/jquery-2.2.4.min.js"></script>
<script src="<?=WEB_ROOT?>js/jquery-ui.min.js"></script>
<script src="<?=WEB_ROOT?>js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?=WEB_ROOT?>js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?=WEB_ROOT?>js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?=WEB_ROOT?>js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img class="ml-5" src="images/preloaders/4.gif" alt="">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-colored-2 sm-text-center p-0">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="widget no-border m-0">
              <ul class="list-inline xs-text-center text-white mt-5">
                <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i class="fa fa-phone text-theme-colored vertical-align-middle mr-10"></i> + (212) 666-246-222</a> </li>
                <li class="m-0 pl-10 pr-10">
                  <a href="#" class="text-white"><i class="fa fa-envelope-o text-theme-colored vertical-align-middle mr-10"></i> contact@sgpo.ma</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 pr-0">
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-flat icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <a class="btn btn-colored btn-flat btn-theme-colored pb-10 mr-10" href="<?=WEB_ROOT?>/login"><i class="fa fa-lock vertical-align-middle mr-10"></i>Login</a>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip xs-pull-center mt-20 pt-5" href="<?=WEB_ROOT?>/acceuil">
              <img src="<?=WEB_ROOT?>images/logo-light-1.png" alt="">
            </a>
            <ul class="menuzord-menu">
              <li class="active"><a href="<?=WEB_ROOT?>/acceuil">Accueil</a>
              </li>
              <li><a href="<?=WEB_ROOT?>/travail">Services</a>
              </li>
              <li><a href="<?=WEB_ROOT?>/about">A propos</a>
              </li>
              <li><a href="<?=WEB_ROOT?>/ofre">Nos Services</a>
              </li>
              </li>
              <li><a href="<?=WEB_ROOT?>/recrut">recrutement</a>
              </li>
              </li>
              <li><a href="<?=WEB_ROOT?>/contact">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  
    <?= $content_for_layout ?>
  
  <!-- /.content-wrapper -->
  <footer id="footer" class="footer" data-bg-img="<?=WEB_ROOT?>images/footer-bg.png" data-bg-color="#1C2633">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            
            <p>Villa 14, Rue Khenifra, Hassan - Rabat</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">+ (212) 666-246-222</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">contact@sgpo.ma</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#"></a> </li>
            </ul>
            <ul class="social-icons icon-bordered icon-circled icon-sm mt-15">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
           
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Liens utiles</h5>
            <ul class="list angle-double-right list-border">
              <li><a href="<?=WEB_ROOT?>/acceuil">Accueil</a></li>
              <li><a href="<?=WEB_ROOT?>/travail">Services</a></li>
              <li><a href="<?=WEB_ROOT?>/about">A propos</a></li>              
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            

            <!-- Quick Contact Form Validation-->
            <script type="text/javascript">
              $("#footer_quick_contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom" data-bg-color="#1C2633">
      <div class="container pt-15 pb-10">
        <div class="row">
          <div class="col-md-12">
            <p class="font-12 text-gray m-0 text-center">SIGIPIO  <span class="text-theme-colored">ThemeMascot</span>. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?=WEB_ROOT?>js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="<?=WEB_ROOT?>js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?=WEB_ROOT?>js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?=WEB_ROOT?>js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?=WEB_ROOT?>js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?=WEB_ROOT?>js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?=WEB_ROOT?>js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?=WEB_ROOT?>js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?=WEB_ROOT?>js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?=WEB_ROOT?>js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>