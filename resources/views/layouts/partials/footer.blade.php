@push('styles')
<style>
    footer {
        color: #FF9933;
        padding-top: 2%;
        padding-left: 2%;
        padding-right: 2%;
        width: 99%;
    }
    .footertext {
        position: fixed;
        width: 98%;
        top: 910px;
    }
</style>
@endpush

@section('footer')
    <footer>
        <div class="footertext">
            <div class="row">

                <div class="col-md-3">
                    Join the <a href="http://discord.uoltt.org" target="_blank">Discord</a>
                </div>

                <div class="col-md-3">
                    The Linustechtips <a href="http://linustechtips.com" target="_blank">Forum</a>
                </div>

                <div class="col-md-3">
                    Site Creators  ©
                    <a href="https://linustechtips.com/main/profile/85015-givingtnt/" target="_blank">givingtnt</a>,
                    <a href="https://linustechtips.com/main/profile/316-judahnator/" target="_blank">judahnator</a>  2017
                </div>

                <div class="col-md-3">
                    Website Designer © <a href="https://linustechtips.com/main/profile/304117-gyre-taenn/" target="_blank">Textbook</a> 2016
                </div>

            </div>
        </div>
    </footer>
@endsection