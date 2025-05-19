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
<style>
    .dropzone .dz-preview.dz-error .dz-error-message {
        display:none !important;
    }

    </style>
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






<!--https://unisharp.github.io/laravel-filemanager/installation  -->

  <script src="//cdn.tiny.cloud/1/mrbzfnzpc24zgrbljjlr85kxq6fj29o8csuq1p481u08c6lu/tinymce/5/tinymce.min.js"></script>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    relative_urls: false,
    plugins: [
      "link image media"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | link image media",
    file_picker_callback: function (callback, value, meta) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.body.clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
      if (meta.filetype == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.openUrl({
        url : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes", 
        close_previous : "no",
        onMessage: (api, message) => {
          callback(message.content);
        }
      });
    }
  };

  tinymce.init(editor_config);
</script>

<!-- https://unisharp.github.io/laravel-filemanager/installation -->
</html>
