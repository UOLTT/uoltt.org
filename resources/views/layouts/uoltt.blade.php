@include('layouts.partials.navigation')
@include('layouts.partials.footer')
<html>

    <head>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <style>
            body {
                background-color: #2E302D
            }
            .header_img {
                width: 179px;
                float: left;
                padding-left: 1.9%;
            }
            .title {
                float: left;
                padding-top: 99px;
                padding-left: 30px;
            }
            .title h1 {
                color: rgb(255,153,51)
            }
            #container {
                background-color: rgb(34, 36, 33);
            }
            #page_header {
                padding-top: 60px;
            }
            .rect {
                height: 100%;
                width: 3%;
                background-color: rgb(255,153,51);
                float: right;
                position: absolute;
                right: 0;
                top: 0;
            }
            .headerhr {
                border: none;
                background-color: rgb(255,153,51);
                color: rgb(255,153,51);
                height: 11px;
                left: 88px;
                width: 100%;
            }
            .menubutton {
                color: rgb(255,153,51);
                position: relative;
                top: 150px;
                right: 780px;
            }
            p, h1, h3, label, table {
                color: rgb(255,153,51);
            }
            .footerimgcontainer {
                text-decoration: none;
                text-align: center;
                background-image: url({{ url('/assets/givingtnt/footer.svg') }});
                background-repeat: no-repeat;
                background-color: #2E302D;
                margin-left: -2%;
            }
            .footerimg {
                height: 70px;
                padding-left: 60px;
                padding-right: 60px;
            }
            .list-group-item {
                 background-color: rgb(34, 36, 33);
                 border: none;
            }
        </style>

        @stack('styles')

    </head>

    <body>

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-11 col-md-offset-1" id="container">

                    <!-- the yellow sidebar -->
                    <div class="rect"></div>

                    <!-- the header -->
                    <div class="row" id="page_header">
                        <div class="col-md-12">

                            <a href="{{ route('index') }}">
                                <img class="header_img" src="{{ url('assets/givingtnt/uoltt_logo_website.svg') }}" alt="logo">
                            </a>

                            <div class="title">
                                <h1>LINUSTECHTIPS CONGLOMERATE</h1>
                            </div>

                            <div class="menubutton">
                                <span style="font-size:30px;cursor:pointer" onclick="openNav()">☰ Menu</span>
                            </div>

                            @yield('navigation')

                        </div>
                    </div>

                    <hr class="headerhr">

                    <div style="padding-right:30px;">
                        @yield('content')
                    </div>

                    <!-- the footer -->
                    <div class="footerimgcontainer">
                        <img class="footerimg" src="http://uoltt.local/assets/givingtnt/rndmhornet.svg" alt="hornet">
                        <img class="footerimg" src="http://uoltt.local/assets/givingtnt/rndmvanduul.svg" alt="vanduul">
                    </div>

                </div>
            </div>


        </div>

    </body>

    @yield('footer')

    <!-- jQuery -->
    <script src="{{ url('js/jquery-3.2.1.min.js') }}"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    @stack('scripts')

</html>