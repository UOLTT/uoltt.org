@extends('layouts.uoltt')

@include('layouts.partials.datatables')

@section('nav-header','SHOPS')

@section('content')

    <h1>Shops List</h1>

    <table id="ShopsTable" style="display:none; width:80%;">

        <thead>
        <tr>
            <th>Name</th>
            <th>System</th>
            <th>Location</th>
            <th>Affiliation</th>
            <th>Allegiance</th>
        </tr>
        </thead>

        <tbody>
        @foreach(\App\Models\Shop::with('location.system','location.celestial_type','affiliation','allegiance')->orderBy('name')->get() as $Shop)
            <tr>
                <td><a href="{{ route('shops.show',$Shop->id) }}">{{ $Shop->name }}</a></td>
                <td>{{ $Shop->location->system->name }}</td>
                <td>{{ $Shop->location->name }} ({{ $Shop->location->celestial_type->name }})</td>
                <td>{{ $Shop->affiliation->name }}</td>
                <td>{{ $Shop->allegiance->name }}</td>
            </tr>
        @endforeach
        </tbody>

    </table>

@endsection

@push('scripts')
<script>
    $('#ShopsTable').show().DataTable();
</script>
@endpush