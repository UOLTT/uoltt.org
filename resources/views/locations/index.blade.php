@extends('layouts.uoltt')

@push('styles')
<style href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"></style>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
@endpush

@section('content')

    <h1 class="page-header">Reported Locations</h1>

    <table id="locationsTable">
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
        $('#locationsTable').DataTable();
    });
</script>
<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
@endpush