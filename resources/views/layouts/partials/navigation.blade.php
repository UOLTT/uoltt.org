@push('styles')
<style>
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-image: url({{ url('/assets/givingtnt/navrect.svg') }});
        background-repeat: no-repeat;
        transition: 0.25s;
        padding-top: 60px;
        font-family: 'Roboto Condensed', sans-serif;
        color: rgb(255, 154, 42);
        overflow: hidden;
    }
    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }
    .sidenav h1 {
        padding: 34.9px 8px 5px 32px;
        text-decoration: none;
        font-size: 55px;
        color: #FFD178;
        display: block;
        transition: 0.25s;
    }
    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #FFD178;
        display: block;
        transition: 0.25s;
    }
</style>
@endpush

@section('navigation')
<div id="Sidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h1>@yield('nav-header','UOLTT')</h1>
    <a href="{{ route('index') }}">Home</a>
    @stack('nav-links')
    <a href="{{ route('commodities.index') }}">Commodities</a>
    @permission('create_reports')
        <a href="{{ route('commodities.report') }}">&nbsp;&nbsp; - Report</a>
    @endpermission
    <a href="{{ route('faq') }}">F.A.Q.</a>
    <a href="{{ route('locations.index') }}">Locations</a>
    @permission('create_reports')
        <a href="{{ route('locations.report') }}">&nbsp;&nbsp; - Report</a>
    @endpermission
    @if(\Auth::guest())
        <a href="{{ route('login') }}">Login</a>
    @endif
    <a href="{{ route('shops.index') }}">Shops</a>
    @permission('create_reports')
        <a href="{{ route('shops.report') }}">&nbsp;&nbsp; - Report</a>
    @endpermission
</div>
@endsection

@push('scripts')
<script>
    function openNav() {
        document.getElementById("Sidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("Sidenav").style.width = "0";
    }
</script>
@endpush
