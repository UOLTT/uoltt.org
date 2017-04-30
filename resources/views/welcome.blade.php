@extends('layouts.uoltt')

@section('content')
    <h1 class="page-header">Welcome, to the LTT Conglomerate website.</h1>
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
@endsection