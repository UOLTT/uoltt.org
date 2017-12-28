@extends('layouts.uoltt')

@include('layouts.partials.datatables')

@section('nav-header','BIDS')

@section('content')

    <div class="page-header">
        <h1>Current market items</h1>
    </div>

    <table id="bidsTable" class="table table-striped">

        <thead>
        <tr>
            <th>#</th>
            <th>Commodity</th>
            <th>Shop</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Report Date</th>
        </tr>
        </thead>

        <tbody>
        @foreach($Bids as $bid)
            <tr>
                <td>{{ $bid->id }}</td>
                <td>{{ $bid->commodity->name }}</td>
                <td>{{ $bid->shop->name }}</td>
                <td>{{ $bid->price }}</td>
                <td>{{ $bid->quantity }}</td>
                <td>{{ $bid->created_at->format('m-d-Y g:i a') }}</td>
            </tr>
        @endforeach
        </tbody>

    </table>

@endsection

@push('scripts')
<script>
    $('#bidsTable').dataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
</script>
@endpush