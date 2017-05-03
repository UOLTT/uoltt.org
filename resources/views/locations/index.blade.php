@extends('layouts.uoltt')

@push('styles')
<link type="text/css" rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<style>
    table.dataTable tbody tr {
        background-color: transparent;
    }
    #locationsTable_filter {
        padding-right: 50px;
    }
    .dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate {
        color: rgb(255,153,51);
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        color: rgb(255,153,51) !important;
    }
    #locationsTable_paginate {
        padding-right: 50px;
    }
</style>
@endpush

@section('content')

    <h1 class="page-header">Reported Locations</h1>

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
<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
@endpush