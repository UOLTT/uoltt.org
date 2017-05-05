@extends('layouts.uoltt')

@include('layouts.partials.datatables')

@section('nav-header','GOODS')

@section('content')

    <h1 class="page-header">Commodities</h1>

    <table id="commoditiesTable" style="display: none;width: 80%">

        <thead>
        <tr>
            <th>Name</th>
            <th>Mass</th>
            <th>Description</th>
        </tr>
        </thead>

        <tbody>
        @foreach(\App\Models\Commodity::orderBy('name')->get(['name','description','mass']) as $commodity)
            <tr>
                <td>{{ $commodity->name }}</td>
                <td>{{ $commodity->mass }}</td>
                <td>{{ $commodity->description }}</td>
            </tr>
        @endforeach
        </tbody>

    </table>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#commoditiesTable').show().dataTable();
    });
</script>
@endpush