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
</head>
<header class="header">

    <a href="index.html">
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
        <a href="shipdb.html">Ships</a>
        <a href="#">Sample</a>
        <a href="#">Sample</a>
        <a href="#">Sample</a>
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
    <h1>Welcome, to the LTT Conglomerate website.</h1>
    <img src="{{ url('assets/givingtnt/home_saber.jpg') }}" alt="saber img">
    <div class="text">
        <p>
            This website works closely with both the <a href="https://robertsspaceindustries.com/" target="_blank">RSI website</a> as well as the <a href="http://linustechtips.com" target="_blank">Linustechtips Forum</a> , while remaining independent from both parties.
        </p>
        <p>
            This website serves as a middle ground between the two and contains features that are included on both the forums as well as many that are on the RSI website. For the purpose of gathering information more readily and with less frustration, we have merged many of these features.
        </p>
        <p>
            This site also serves as a reference for additional aspects of our organization, such as organizational branches, general announcements, and guidelines. The most prominent feature is the <a href="http://developers.uoltt.org/api/v3/users" target="_blank">UOLTT Conglomerate User List</a>, which displays the users currently registered within our organization. Our comprehensive list includes the ships users own, their ranks within the org, as well as all the usernames necessary for communicating through either the LTT forums or Star Citizen.
        </p>
        <p>
            Whether you are a standard Star Citizen user with enjoyment in mind or a developer with lofty goals, we encourage you to join our group and achieve our primary objective: fun.
        </p>
        <p>
            If you have any interest in assisting UOLTT with developmental projects, we have a public API and guidelines that we can readily provide for you.
        </p>
    </div>
    <div>
        <p>

        </p>
    </div>
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
</html>