<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Svarovsky">
    <meta name="author" content="Robert">
    <link rel="icon" href="../../favicon.ico">

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

    <title>Svarovsky</title>
  </head>
<body>


<div class="meeting-slide">
    <i class="fa fa-handshake-o"></i>
    <div class="meeting-slide-title">
        Sjednat schůzku
    </div>
</div>

@if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-error">
        {{ Session::get('error') }}
    </div>
    <style>
        input:required[value=""]{
            border-color: #f31e1e;
        }
        textarea:required:empty{
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
        $(".page-loader").delay(300).fadeOut(300);
        if($('.alert').length !== 0){
            if($('.alert').html().length > 0){

                $('.alert').animate({top: '0px', opacity: '0.95'}, 600, 'swing').delay(2000).animate({top: '-50px'},300, 'swing');
            }
        }

        $('.meeting-popup .option label').toggle(function(){
            $(this).css({background: '#87bc26', color: '#fff'});
            $(this).next('input[type="checkbox"]').prop('checked', true);
        }, function () {
            $(this).attr('style','');
            $(this).next('input[type="checkbox"]').prop('checked', false);
        });

    });
    $(window).scroll(function () {
      /*  if($(window).scrollTop() > 350){
            $('.meeting-slide').css('right','-300px');


        }else{
            $('.meeting-slide').attr('style','');
        }*/

        if($(window).scrollTop() > 10){
            $('.navbar-inverse .navbar-nav>li>a').css('padding','15px 20px');
            $('.navbar-brand img').css('width','70%');
        }else{
            $('.navbar-inverse .navbar-nav>li>a').attr('style','');
            $('.navbar-brand img').attr('style','');
        }
    });
</script>

<script type="text/javascript">
    function initMap() {
        var uluru = {lat: 49.1758315, lng:16.6056285};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: uluru
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