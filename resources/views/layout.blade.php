<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="finanční poradce, finanční poradenství, finance, pomoc s financemi, finanční pomoc">
    <meta name="author" content="Ing. Jiří Svarovský">


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


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;subset=latin-ext" rel="stylesheet">

    <link media="all" type="text/css" rel="stylesheet" href="/revolution/css/settings.css">
    <link media="all" type="text/css" rel="stylesheet" href="/revolution/css/layers.css">
    <link media="all" type="text/css" rel="stylesheet" href="/revolution/css/navigation.css">

    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>

    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>

    <link media="all" type="text/css" rel="stylesheet" href="/css/styles.css">

    <title>Ing. Jiří Svarovský | Finanční poradce</title>

    @if($_SERVER['REQUEST_URI'] == '/kontakt')
        <style>
            main{
                padding-top: 0px;
            }
        </style>
    @else
        <style>
            footer{
                margin-top: 50px;
            }
        </style>
    @endif


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

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/slick/slick.min.js"></script>

        <!-- RS5.0 Core JS Files -->
<script type="text/javascript" src="/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script type="text/javascript" src="/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
        <!-- Latest compiled and minified JavaScript -->
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("#slider1").revolution({
            sliderType: "normal",
            sliderLayout: "fullwidth",
            delay: 9000,
            autoHeight: "on",
            minHeight: 200,
            responsiveLevels: [1240, 1025, 778, 480],
            navigation: {
                arrows: {enable: true}
            },
            gridwidth: 1920,
            gridheight: [800, 800, 1100, 1800],
        }).show(500);


        $('.single-item').slick({
            speed: 1000,
            dots: true,
        });

        $('.meeting-slide, .btn-meeting').click(function(){
            $('.meeting-popup').fadeIn(300);
            $('body').css('overflow-y','hidden');
        });

        $('.close').click(function(){
            $('.meeting-popup').fadeOut(300);
            $('body').css('overflow-y','auto');
        });
        if($(window).height() > $('body').height()){
            $('footer').css('position','absolute');
            $('footer').css('width','100%');
            $('footer').css('bottom','0px');
        }

        if($('.alert').length !== 0){
            if($('.alert').html().length > 0){

                $('.alert').animate({top: $('.alert').height()+23, opacity: '0.95'}, 600, 'swing');
            }
        }
        $('.alert-close').click(function(){
            $('.alert').animate({top: '0px'},300, 'swing');
        });

        $('.meeting-popup .option label').toggle(function(){
            $(this).css({background: '#87bc26', color: '#fff'});
            $(this).next('input[type="checkbox"]').prop('checked', true);
        }, function () {
            $(this).attr('style','');
            $(this).next('input[type="checkbox"]').prop('checked', false);
        });


        if($(window).width() > 767) {
            var maxHeight = -1;
            $(this).find("#categories .category-card").each(function () {
                if ($(this).height() > maxHeight) {
                    maxHeight = $(this).height();
                }
            });
            $('#categories .category-card').height(maxHeight);
        }


        $(".page-loader").delay(300).fadeOut(300);

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


    $(window).scroll(function () {
        if($(window).scrollTop() > 350){
            $('.meeting-slide-title').fadeOut(0);
            $('.meeting-slide i.fa').fadeIn(0);
            $('.meeting-slide').attr('style','width: 125px;right:-55px;padding: 15px 8px 8px');
        }else{
            $('.meeting-slide').attr('style','');
            $('.meeting-slide-title').fadeIn(0);
            $('.meeting-slide i.fa').fadeOut(0);
        }

        if($(window).scrollTop() > 10){
            $('.navbar-inverse .navbar-nav>li>a').addClass('menu-padding');
            $('.navbar-brand img').addClass('logo-width');
        }else{
            $('.navbar-inverse .navbar-nav>li>a').removeClass('menu-padding');
            $('.navbar-brand img').removeClass('logo-width');
        }
    });
</script>

@if (Session::has('error_meeting'))
    <script style="text/javascript">
        $(document).ready(function(){
            $('.meeting-popup').fadeIn(300);
            $('body').css('overflow-y','hidden');
        });
    </script>
@endif

<script type="text/javascript">
    function initMap() {
        var uluru = {lat: 49.1758315, lng:16.6056285};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: uluru,
            scrollwheel:false,
            draggable:true,

        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAoaogpThEMkzUJz8yfBZR9wv6DCEYarOQ&callback=initMap">
</script>

</body>
</html>