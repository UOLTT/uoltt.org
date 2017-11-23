@extends('layouts.uoltt')

@include('layouts.partials.datatables')

@section('nav-header', 'ITEM')

@section('content')

    <h1>{{ $commodity->name }}</h1>

    <div class="row">

        <div class="col-md-4">

            <h3>Info</h3>

            <table class="table" id="metaTable">
                <tr>
                    <th>Name:</th>
                    <td>{{ $commodity->name }}</td>
                </tr>
                <tr>
                    <th>Description:</th>
                    <td>{{ $commodity->description }}</td>
                </tr>
                <tr>
                    <th>Mass:</th>
                    <td>{{ $commodity->mass }}</td>
                </tr>
            </table>

        </div>

        <div class="col-md-8">

            <h3>Current Item Bids</h3>

            <table id="shopsTable" style="width:85%">

                <thead>
                <tr>
                    <th>Shop</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Report Age</th>
                </tr>
                </thead>

                <tbody>
                @foreach($commodity->bids->sortByDesc('created_at') as $bid)
                    <tr>
                        <td>
                            <a href="{{ route('shops.show', $bid->shop->id) }}">{{ $bid->shop->name }}</a>
                        </td>
                        <td>{{ $bid->quantity }}</td>
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
        $('#shopsTable').dataTable();
    </script>
@endpush