<div id="Sidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h1>@yield('nav-header','UOLTT')</h1>
    <hr/>
    <a href="{{ route('index') }}">Home</a>
    @stack('nav-links')
    <a href="{{ route('commodities.index') }}">Commodities</a>
    @if(!\Auth::guest())
        <a href="{{ route('commodities.report') }}">&nbsp;&nbsp; - Report</a>
    @endif
    <a href="{{ route('faq') }}">F.A.Q.</a>
    <a href="{{ route('locations.index') }}">Locations</a>
    @if(!\Auth::guest())
        <a href="{{ route('locations.report') }}">&nbsp;&nbsp; - Report</a>
    @endif
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('shops.index') }}">Shops</a>
    @if(!\Auth::guest())
        <a href="{{ route('shops.report') }}">&nbsp;&nbsp; - Report</a>
    @endif
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
