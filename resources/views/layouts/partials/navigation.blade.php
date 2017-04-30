<div id="Sidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h1>HOME</h1>
    <hr/>
    @yield('nav-links')
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
