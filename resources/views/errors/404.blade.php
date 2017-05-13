@extends('layouts.uoltt')

@section('nav-header','404')

@section('content')
    <h1>Page Not Found</h1>

    <p>The requested URL <b>{{ Request::getRequestUri() }}</b> could not be found.</p>
@endsection