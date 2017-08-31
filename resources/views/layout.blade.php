<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Nabízím Vám provotřídní služby v oblasti finančního poradenství a pojištění.">
    <meta name="keywords" content="finanční poradce, finanční poradenství, finance, pomoc s financemi, finanční pomoc">
    <meta name="author" content="Ing. Jiří Svarovský">
    <meta name="robots" content="index,follow">

    <link rel="apple-touch-icon" sizes="57x57" href="http://www.svarovskyjiri.cz/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="60x60" href="http://www.svarovskyjiri.cz/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="72x72" href="http://www.svarovskyjiri.cz/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="http://www.svarovskyjiri.cz/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="114x114" href="http://www.svarovskyjiri.cz/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="120x120" href="http://www.svarovskyjiri.cz/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="http://www.svarovskyjiri.cz/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="152x152" href="http://www.svarovskyjiri.cz/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="http://www.svarovskyjiri.cz/img/favicon.ico">
    <link rel="icon" type="image/png" href="http://www.svarovskyjiri.cz/img/favicon.ico" sizes="32x32">
    <link rel="icon" type="image/png" href="http://www.svarovskyjiri.cz/img/favicon.ico" sizes="192x192">
    <link rel="icon" type="image/png" href="http://www.svarovskyjiri.cz/img/favicon.ico" sizes="96x96">
    <link rel="icon" type="image/png" href="http://www.svarovskyjiri.cz/img/favicon.ico" sizes="16x16">
    <link rel="manifest" href="http://www.svarovskyjiri.cz/img/favicon.ico">
    <link rel="mask-icon" href="http://www.svarovskyjiri.cz/img/favicon.ico" color="#87bc26">
    <link rel="shortcut icon" href="http://www.svarovskyjiri.cz/img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('styles')


    <?php require_once "Minifier.php";

    $minifier = new Minifier();

    $minifier->add("css/bootstrap.css");
    $minifier->add("css/raleway.css");
    $minifier->add("css/open-sans.css");
   // $minifier->add("revolution/css/settings.css");
    $minifier->add("revolution/css/layers.css");
  //  $minifier->add("revolution/css/navigation.css");

    $minifier->add("slick/slick.css");
   // $minifier->add("slick/slick-theme.css");
    $minifier->add("css/styles.css");

    $minifier->render();

    ?>
    <title>@if(isset($title)) {{ $title }} @else Ing. Jiří Svarovský | Finanční poradce @endif</title>
    @if($_SERVER['REQUEST_URI'] == '/kontakt')
        <style>
            main{
                padding-top: 0px;
                padding-bottom: 50px;
            }
        </style>
    @else
        <style>
            footer{
                margin-top: 50px;
            }
        </style>
    @endif

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-92984067-2', 'auto');
        ga('send', 'pageview');

    </script>

  </head>
<body>
<div class="meeting-slide">
    <i class="fa fa-handshake-o"></i>
    <div class="meeting-slide-title">
        Sjednat<br />schůzku
    </div>
</div>
@if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
        <div class="alert-close"><i class="fa fa-times"></i></div>
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-error">
        {{ Session::get('error') }}
        <div class="alert-close"><i class="fa fa-times"></i></div>
    </div>
    <style>
        input:required[value=""]{
            border-color: #f31e1e;
        }
        textarea:required:empty{
            border-color: #f31e1e;
        }
        input.required[value=""]{
            border-color: #f31e1e;
        }
        textarea.required:empty{
            border-color: #f31e1e;
        }
    </style>
@endif

@if (Session::has('error_meeting'))
    <div class="alert alert-error">
        {{ Session::get('error_meeting') }}
        <div class="alert-close"><i class="fa fa-times"></i></div>
    </div>
    <style>
        input:required[value=""]{
            border-color: #f31e1e;
        }
        textarea:required:empty{
            border-color: #f31e1e;
        }
        input.required[value=""]{
            border-color: #f31e1e;
        }
        textarea.required:empty{
            border-color: #f31e1e;
        }
    </style>
@endif
@include('partitials.meeting')
<div class="page-loader">
    <div class="loader"><div class="loader-inner ball-clip-rotate-multiple"><div></div><div></div></div></div>
    <div class="loader2"><div class="loader-inner ball-clip-rotate-multiple"><div></div><div></div></div></div>
    <div class="loader3"><div class="loader-inner ball-clip-rotate-multiple"><div></div><div></div></div></div>
</div>
@include('partitials.header')
<main>
    @yield('content')
</main>
@include('partitials.footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
        <!-- RS5.0 Core JS Files -->
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
        <!-- Latest compiled and minified JavaScript -->
<script type="text/javascript" src="/js/scripts.js"></script>

@if (Session::has('error_meeting'))
    <script type="text/javascript">
        $(document).ready(function(){
            $('.meeting-popup').fadeIn(300);
            $('body').css('overflow-y','hidden');
        });
    </script>
@endif

@yield('scripts')
<script type="text/javascript">
    $(document).ready(function(){

        $('.meeting-popup .option label').toggle(function(){
            $(this).css({background: '#87bc26', color: '#fff'});
            $(this).next('input[type="checkbox"]').prop('checked', true);
        }, function () {
            $(this).attr('style','');
            $(this).next('input[type="checkbox"]').prop('checked', false);
        });

        if($(window).height() > $('body').height()){
            $('footer').css('position','absolute');
            $('footer').css('width','100%');
            $('footer').css('bottom','0px');
        }
        $('.meeting-slide, .btn-meeting').click(function(){
            $('.meeting-popup').fadeIn(300);
            $('body').css('overflow-y','hidden');
        });

        $('.close').click(function(){
            $('.meeting-popup').fadeOut(300);
            $('body').css('overflow-y','auto');
        });
        if($('.alert').length !== 0){
            if($('.alert').html().length > 0){

                $('.alert').animate({top: $('.alert').height()+23, opacity: '0.95'}, 600, 'swing');
            }
        }
        $('.alert-close').click(function(){
            $('.alert').animate({top: '0px'},300, 'swing');
        });
    });

    $(window).one('resize', function(){
        if($(window).width() > 767) {
            var maxHeight = -1;
            $(this).find("#categories .category-card").each(function () {
                if ($(this).height() > maxHeight) {
                    maxHeight = $(this).height();
                }
            });
            $('#categories .category-card').height(maxHeight);
        }
    });

    $(window).resize(function(){
        if($(window).width() > 767) {
            var maxHeight = -1;
            $('#categories .category-card').each(function () {
                if ($(this).height() > maxHeight) {
                    maxHeight = $(this).height();
                }
                $('#categories .category-card').height(maxHeight);
            });
        }
    });


</script>
<script async defer type="text/javascript" src="/js/last-scripts.js"></script>
</body>
</html>