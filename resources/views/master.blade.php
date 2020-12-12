<!doctype html>
<html class="no-js" lang="zxx">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  
    <title>Right Move</title>
    <meta name="title" content="Laudco Media">
    <meta name="description" content="At Laudco, we drive ROI and build brands online for our clients – some of world&#039;s biggest and best known brands and personalities">
    <meta name="keywords" content="laudco, media">
    <meta name="author" content="laudco Media">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="csrf-token" content="IXav5YRhnRlxHGc6fMwN9IwHYPoKRdwQYGZyco62">

<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CRoboto:400,500,700,900%7CPlayfair+Display:400,700,700i,900,900i%7CWork+Sans:400,500,600,700"
    rel="stylesheet">

<!-- signatra-font -->
<link rel="stylesheet" href="css/signatra-font.css">

<link rel="icon" type="image/png" href="{{asset('storage/settings/April2019/NwdppXBsbh6Uo5PLnXeD.png')}}">
<!-- Place favicon.ico in the root directory -->
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/animate.css')}}">
<link rel="stylesheet" href="{{asset('css/iconfont.css')}}">
<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
<link rel="stylesheet" href="{{asset('css/rev-settings.css')}}">

<!--For Plugins external css-->
<link rel="stylesheet" href="{{asset('css/plugins.css')}}" />

<!--Theme custom css -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<!--Theme Responsive css-->
<link rel="stylesheet" href="{{asset('css/responsive.css')}}" />

<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('css/custom.css')}}" />
<style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        /*post details css*/
        
        /*post details css*/
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143022686-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-143022686-1');

</script>
    <!-- Google Tag Manager -->
<script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-W7JQP9C');

</script>

<script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $Idle: 0,
              $SlideDuration: 5000,
              $SlideEasing: $Jease$.$Linear,
              $PauseOnHover: 4,
              $SlideWidth: 140,
              $Align: 0
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
<!-- End Google Tag Manager -->
        </head>

<body>
        <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W7JQP9C" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
     
    
    <!-- header section -->
    <header class="xs-header header-transparent nav-lights">
    <div class="container">
        <nav class="xs-menus clearfix">
            <div class="nav-header" style="width: 300px !important">
                
                <a class="nav-brand" href="{{url('/')}}">
                    <img src="{{asset('storage/settings/June2019/NkqJmjVfVYE9cegFgw0V.png')}}" alt="">
                </a>
                <div class="nav-toggle"></div>
            </div>
            <div class="nav-menus-wrapper align-to-right">
                <!-- menu list -->
                <ul class="nav-menu">
                    <li><a href="{{url('/')}}">HOME</a></li>
                    <li><a href="#property_listing">ALL PROPERTY</a></li>
                    
                    <li><a href="#" class="navSidebar-button navSidebar-button" >GET IN TOUCH</a></li>
                     <li><a style="margin: 8px; padding: 0px 20px;color:#000" href="{{route('post.create')}}" class="btn btn-primary ">Post Advertisement Here</a></li>
                </ul> <!-- End menu list -->
                <ul class="xs-menu-tools">
                    
                    <li>
                        <a href="#" class="navSidebar-button"><i class="icon icon-burger-menu"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div> 
</header>   


 @yield('content')


<!-- footer -->
 <footer class="xs-footer-section footer-style5" data-delighter="start:0.80">
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget">
                        <div class="footer-logo-wraper">
                            <a href="index.html" class="footer-logo">
                                <img src="{{asset('storage/settings/June2019/NkqJmjVfVYE9cegFgw0V.png')}}" alt="">
                            </a>
                        </div>
                    </div> 
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget">
                        <h4 class="widget-title">Pages</h4>
                        <ul class="xs-list">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">News & Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Career</a></li>
                        </ul> 
                    </div> 
                </div>

                <!-- <div class="col-md-6 col-lg-3">
                    <div class="footer-widget">
                        <h4 class="widget-title">Company</h4>
                        <ul class="xs-list">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#" target="_blank">Brand Manual</a></li>
                            
                        </ul> 
                    </div> 
                </div> -->
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget">
                        <h4 class="widget-title">Social Media</h4>
                        <ul class="xs-list">
                            <li><a href="#" target="_blank">Facebook</a></li>
                            <li><a href="#" target="_blank">Twitter</a></li>
                            
                            <li><a href="#" target="_blank">Linkedin</a></li>
                            <li><a href="#" target="_blank">Instagram</a></li>
                        </ul> 
                    </div> 
                </div>
                
            </div> 

            
        </div> 
    </div> 
    <div class="wave-shape">
        <img src="images/footer-wave-shape.png" alt="">
    </div>
</footer>
     
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/Popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/scrollax.js')}}"></script>
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/swiper.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyDeZubzJTQgtjreqsdaGMGXxaxP-pv6pSk">
</script>
<script src="{{asset('js/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('js/delighters.js')}}"></script>
<script src="{{asset('js/typed.js')}}"></script>
<script src="{{asset('js/jquery.parallax.js')}}"></script>
<script src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('js/skrollr.min.js')}}"></script>
<script src="{{asset('js/shuffle-letters.js')}}"></script>
<script src="../cdn.jsdelivr.net/npm/typeit%406.0.2/dist/typeit.min.js"
    integrity="sha256-9Gb80T3fTOUMBQUR8mMP/s4n3eDnc5W25l7PLA39LvM=" crossorigin="anonymous"></script>
<script src="../cdn.jsdelivr.net/gh/hmongouachon/mgGlitch/src/mgGlitch.min.js"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/jssor.slider-28.0.0.min.js')}}" type="text/javascript"></script>

<script type="text/javascript">jssor_1_slider_init();
    </script>
     
    </body>


</html>
