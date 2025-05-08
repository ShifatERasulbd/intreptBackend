<!DOCTYPE html>
<html lang="en">

<!-- index.html  Tue, 07 Jan 2020 03:35:33 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Interpt</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="{{asset('backend/assets/modules/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/modules/fontawesome/css/all.min.css')}}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{asset('backend/assets/modules/jqvmap/dist/jqvmap.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/modules/summernote/summernote-bs4.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/ssets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">

<!-- Template CSS -->
<link rel="stylesheet" href="{{asset('backend/assets/css/style.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/components.min.css')}}">
<!-- Font Awesome CDN -->
<!-- Font Awesome v6 CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        
     

        <!-- Start main left sidebar menu -->
        @include ('backend.left_nav')

        @yield('main')
        
        <!-- Start app Footer part -->
        <footer class="main-footer">
            <div class="footer-left">
                 <div class="bullet"></div>  <a href="https://www.egenslab.com/">Egens Lab</a>
            </div>
            <div class="footer-right">
            
            </div>
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="{{asset('backend/assets/bundles/lib.vendor.bundle.js')}}"></script>
<script src="{{asset('backend/js/CodiePie.js')}}"></script>

<!-- JS Libraies -->
<script src="{{asset('backend/assets/modules/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('backend/assets/modules/chart.min.js')}}"></script>
<script src="{{asset('backend/assets/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('backend/assets/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset('backend/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

<!-- Page Specific JS File -->
<script src="{{asset('backend/js/page/index.js')}}"></script>

<!-- Template JS File -->
<script src="{{asset('backend/js/scripts.js')}}"></script>
<script src="{{asset('backend/js/custom.js')}}"></script>
</body>

<!-- index.html  Tue, 07 Jan 2020 03:35:33 GMT -->
</html>
