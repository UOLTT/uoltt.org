@extends('layouts.uoltt')

@include('layouts.partials.datatables')

@section('nav-header','Places')

@section('content')

    <h1>Reported Locations</h1>

    <table id="locationsTable" style="display: none;width: 80%">
        <thead>
        <tr>
            <th>Location Name</th>
            <th>Type</th>
            <th>System</th>
            <th>Allegiance</th>
            <th>Affiliation</th>
        </tr>
        </thead>
        <tbody>
        @foreach(\App\Models\Location::with('system','celestial_type','allegiance','affiliation')->orderBy('name')->get() as $Location)
            <tr>
                <td>{{ $Location->name }}</td>
                <td>{{ $Location->celestial_type->name }}</td>
                <td>{{ $Location->system->name }}</td>
                <td>{{ $Location->allegiance->name }}</td>
                <td>{{ $Location->affiliation->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $('#locationsTable').show().DataTable();
    });
</script>
@endpush