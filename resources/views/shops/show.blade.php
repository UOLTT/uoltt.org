@extends('layouts.uoltt')

@include('layouts.partials.datatables')

@section('nav-header','SHOP')

@section('content')

    <h1>{{ $shop->name }}</h1>

    <div class="row">

        <div class="col-md-4">

            <h3>Info</h3>

            <table class="table" id="metaTable">
                <tr>
                    <th>Location:</th>
                    <td>{{ $shop->location->name }}</td>
                </tr>
                <tr>
                    <th>Allegiance:</th>
                    <td>{{ $shop->allegiance->name }}</td>
                </tr>
                <tr>
                    <th>Affiliation:</th>
                    <td>{{ $shop->affiliation->name }}</td>
                </tr>
            </table>

        </div>

        <div class="col-md-8">

            <h3>Items For Sale</h3>

            <table id="commoditiesTable" style="width:85%">

                <thead>
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Mass (in SCU)</th>
                    <th>Price</th>
                    <th>Report Age</th>
                </tr>
                </thead>

                <tbody>
                @foreach($shop->bids->sortByDesc('created_at') as $bid)
                    <tr>
                        <td>{{ $bid->commodity->name }}</td>
                        <td>{{ $bid->quantity }}</td>
                        <th>{{ $bid->commodity->mass }}</th>
                        <td>{{ $bid->price }}</td>
                        <td>{{ $bid->created_at->diffForHumans(\Carbon\Carbon::now(),true) }}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>

        </div>

    </div>

@endsection

@push('scripts')
<script>
    $('#commoditiesTable').dataTable();
</script>
@endpush