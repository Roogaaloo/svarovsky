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
    <meta name="robots" content="noindex,nofollow">


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
   {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">--}}
   {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;subset=latin-ext" rel="stylesheet">--}}


    <link media="all" type="text/css" rel="stylesheet" href="/revolution/css/settings.css">
{{--    <link media="all" type="text/css" rel="stylesheet" href="/revolution/css/layers.css">--}}
    <link media="all" type="text/css" rel="stylesheet" href="/revolution/css/navigation.css">

 {{--   <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>--}}

    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>

 {{--   <link media="all" type="text/css" rel="stylesheet" href="/css/styles.css">--}}



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

    <title>Ing. Jiří Svarovský | Finanční poradce</title>

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

<script type="text/javascript" src="js/scripts.js"></script>

@if (Session::has('error_meeting'))
    <script style="text/javascript">
        $(document).ready(function(){
            $('.meeting-popup').fadeIn(300);
            $('body').css('overflow-y','hidden');
        });
    </script>
@endif

@yield('scripts')



<script async defer type="text/javascript" src="js/last-scripts.js"></script>

</body>
</html>