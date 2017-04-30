<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ url('css/givingtnt/css1000.css') }}" media="(min-width:1450px), (max-width : 1446px)">
    <link rel="stylesheet" type="text/css" href="{{ url('css/givingtnt/css1446.css') }}" media="(min-width:1436px), (max-width:1446px)">
    <link rel="stylesheet" type="text/css" href="{{ url('css/givingtnt/css1889.css') }}" media="(min-width:1572px), (max-width:1889)">
    <link rel="stylesheet" type="text/css" href="{{ url('css/givingtnt/css1890.css') }}" media="(min-width:1890px)">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" >
    <link rel="icon" href="{{ url('assets/givingtnt/icon.png') }}" sizes="any">
    <title>linustechtips conglomerate</title>
    <style>
        .page-header{
            padding-top:20px;
        }
    </style>
</head>
<header class="header">

    <a href="{{ route('index') }}">
        <img src="{{ url('assets/givingtnt/uoltt_logo_website.svg') }}" alt="logo">
    </a>
    <div class="title">
        <h1>LINUSTECHTIPS CONGLOMERATE</h1>

    </div>
    <div class="rect" >
    </div>
    <div id="Sidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <h1>HOME</h1>
        <hr/>
        <a href="{{ route('login') }}">Login</a>
    </div>
    <script>
        function openNav() {
            document.getElementById("Sidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("Sidenav").style.width = "0";
        }
    </script>
    <div class="menubutton">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
        <a class="community" href="https://linustechtips.com/main/forum/77-star-citizen/" target="_blank">Community</a>
        <hr class="headerhr">
    </div>
</header>
<body>

<div class="main">
    @yield('content')
</div>
<hr class="hrfoot1" noshade/>
<hr class="hrfoot2" noshade/>
<hr class="hrfoot1" noshade/>
</body>
<footer>
    <div class="footerimg">
        <img src="{{ url('assets/givingtnt/rndmhornet.svg') }}" alt="hornet">
        <img src="{{ url('assets/givingtnt/rndmvanduul.svg') }}" alt="vanduul">
    </div>
    <div class="footertext">
        <div>
            The Linustechtips <a href="http://linustechtips.com" target="_blank">Forum</a>
        </div>
        <div>
            Join the <a href="http://discord.uoltt.org" target="_blank">Discord</a>
        </div>
        <div>
            Website Creator  &#169; <a href="https://linustechtips.com/main/profile/85015-givingtnt/" target="_blank">givingtnt</a>  2016
        </div>
        <div>
            Website Designer &#169; <a href="https://linustechtips.com/main/profile/304117-gyre-taenn/" target="_blank">Textbook</a> 2016
        </div>
    </div>
</footer>
@stack('scripts')
</html>