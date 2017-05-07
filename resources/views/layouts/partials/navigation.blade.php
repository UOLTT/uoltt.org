<div id="Sidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h1>@yield('nav-header','UOLTT')</h1>
    <hr/>
    <a href="{{ route('index') }}">Home</a>
    @stack('nav-links')
    <a href="{{ route('commodities.index') }}">Commodities</a>
    <a href="{{ route('faq') }}">F.A.Q.</a>
    <a href="{{ route('locations.index') }}">Locations</a>
    <a href="{{ route('login') }}">Login</a>
</div>

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
