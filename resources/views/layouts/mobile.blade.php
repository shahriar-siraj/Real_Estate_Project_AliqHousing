<!DOCTYPE html>

<html style="overflow-x: auto;">
<head>
    <title>شقة للبيع في اربد | استثمارات عقارية الأردن</title>

	<meta name="google-site-verification" content="D5ZsoBH75_aEKD3g-nL6nrEsJ3ZIkHo_GYdpROJl1Gw" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=description content=" شركة (علي القرعان للإسكان) توفر عقارات سكنيه واستثمارايه في الأردن، شقة للبيع في اربد اسعار مناسبه للجميع."/>
    <meta name=keywords content="عقارات اربد, شقق في اربد, شقة للبيع اربد, الاستثمارات العقارية الاردن, اسكانات اربد"/>

    <link rel="shortcut icon" type="image/png" href="{{ URL::asset('assets/images/icon.png') }}"/>

    <!-- CSS -->
    <link href="{{ URL::asset('/assets/plugin/bootstrap/bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ URL::asset('/assets/css/common.css') }}" rel="stylesheet" >
    <link href="{{ URL::asset('/assets/css/layout_mobile.css') }}" rel="stylesheet" >

    <!-- Javascript Libraries -->
    <script src="{{ URL::asset('/assets/plugin/jQuery/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/plugin/bootstrap/bootstrap.min.js') }}"></script>

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="{{ URL::asset('/slides/jquery.slides.min.js') }}"></script>

    <style>
    /*body {
      -webkit-font-smoothing: antialiased;
      font: normal 15px/1.5 "Helvetica Neue", Helvetica, Arial, sans-serif;
      color: #232525;
      padding-top:70px;
    }*/

    .slides {
      display: none
    }

    .slides .slidesjs-navigation {
      margin-top:5px;
    }

    a.slidesjs-next,
    a.slidesjs-previous,
    a.slidesjs-play,
    a.slidesjs-stop {
        background-image: url({{ URL::asset('/slides/btns-next-prev.png') }});
      background-repeat: no-repeat;
      display:block;
      width:12px;
      height:18px;
      overflow: hidden;
      text-indent: -9999px;
      float: left;
      margin-right:5px;
    }

    a.slidesjs-next {
      margin-right:10px;
      background-position: -12px 0;
    }

    a:hover.slidesjs-next {
      background-position: -12px -18px;
    }

    a.slidesjs-previous {
      background-position: 0 0;
    }

    a:hover.slidesjs-previous {
      background-position: 0 -18px;
    }

    a.slidesjs-play {
      width:15px;
      background-position: -25px 0;
    }

    a:hover.slidesjs-play {
      background-position: -25px -18px;
    }

    a.slidesjs-stop {
      width:18px;
      background-position: -41px 0;
    }

    a:hover.slidesjs-stop {
      background-position: -41px -18px;
    }

    .slidesjs-pagination {
      margin: 7px 0 0;
      float: right;
      list-style: none;
    }

    .slidesjs-pagination li {
      float: left;
      margin: 0 1px;
    }

    .slidesjs-pagination li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url({{ URL::asset('/slides/pagination.png') }});
      background-position: 0 0;
      float: left;
      overflow: hidden;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
      background-position: 0 -13px
    }

    .slidesjs-pagination li a:hover {
      background-position: 0 -26px
    }

    .slides a:link,
    .slides a:visited {
      color: #333
    }

    .slides a:hover,
    .slides a:active {
      color: #9e2020
    }

    /*.navbar {
      overflow: hidden
    }*/
  </style>


  <script>
    $(document).ready(function()
    {
      var $myArray = $('.slideimg');
      var $img;

     $(".slideimg").click(function(){
      jQuery.noConflict(); 
        $('#myModal').modal('toggle');
        $("#modalimg").attr("src",$(this).attr('src'));
        $img = $myArray[($.inArray($img, $myArray) + 1) % $myArray.length];
        
        
     });

     $("#nextBtn").click(function(){
        var next = $myArray[($.inArray($img, $myArray) + 1) % $myArray.length];
        $img = next;
        $("#modalimg").attr("src",$(next).attr('src'));

     }
     );
    // $(function(){
      $(".slides").slidesjs({
        width: 940,
        height: 528,
        play: {
      active: true,
      effect: "slide",
      interval: 5000,
      auto: true,
      swap: true,
      pauseOnHover: false,
      restartDelay: 2500
    }
      });
    // });
});
  </script>
</head>
<body>
<div class="header">
    <div class="top">
    </div>
    <div class="middle">
        <div class="float-left">
            <div class="bar margin-l-p5em margin-t-p5em"></div>
            <div class="social clear-both margin-l-p5em margin-t-p5em">
                <a href="https://www.facebook.com/aliqhousing/" class="facebook float-left"></a>
                <a href="https://www.instagram.com/aliqhousing/" class="instagram float-left"></a>
                <a href="#" class="mail float-left"></a>
                <a href="whatsapp://00962796681400" class="whatsapp float-left"></a>
                <a href="tel:00962788880904" class="phone float-left"></a>
            </div>
        </div>
        <div class="logo float-right"></div>
        <a href="{{ URL("/") }}" class="title center-pos"></a>
    </div>
    <div class="bottom back-color-title box-shadow-bottom">
        <div class="center-pos">
            <a href="tel:00962788880904" class="fst float-left"></a>
            <a href="/#house_2" class="snd float-left"></a>
            <a href="/#house_1" class="thd float-left"></a>
            <a href="/#house_3" class="fth float-left"></a>
        </div>
    </div>
</div>

<div class="content">
    @yield('content')
</div>

<div class="footer">
	<input type="hidden" name="client" value="mobile" />
	<input type="hidden" name="context_path" value="{{ url() }}" />
    <div class="dot-line"></div>
    <div class="link">
        <div class="center-pos">
            <a href="tel:00962788880904" class="link-fst float-left"></a>
            <div class="float-left"></div>
            <a href="/#house_2" class="link-snd float-left"></a>
            <div class="float-left"></div>
            <a href="/#house_1" class="link-thd float-left"></a>
            <div class="float-left"></div>
            <a href="/#house_3" class="link-fth float-left"></a>
        </div>
    </div>
    <br/>
        <div class="link">
          <center>
            <div class="center-pos" style="font-weight: 900; font-size: 14px;">
                <a href="{{ URL('/blogs') }}" style=" color: #cc3300;">مدونه</a> |
                <a href="{{ URL('/blogs/1') }}" style="color: #cc3300;">عن الشركة</a> |
                <a href="{{ URL('/blogs/2') }}" style=" color: #cc3300;">اتصل بنا</a>
            </div>
          </center>
        </div>
        <br/>
    <div class="copyright color-black">
        Copyright &copy; 2004 - 2016
    </div>
    <div class="bottom-text"></div>
    <div class="bottom-icon"></div>
    <div class="bottom"></div>
</div>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<a href="tel:00962788880904" class="phone contact log"></a>
<script src="{{ URL::asset('/assets/js/home.js?v=1') }}"></script>

</body>
</html>