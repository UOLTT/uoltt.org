@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h1>Bids needing moderation</h1>
    </div>

    <div class="row">
        <div class="col-md-12">

            <table class="table table-striped">

                <thead>
                <tr>
                    <th>Commodity</th>
                    <th>Shop</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Reported By</th>
                    <th>Report Age</th>
                    <th>Mod Tools</th>
                </tr>
                </thead>

                <tbody>
                @foreach($bids as $bid)
                    <tr id="bid_{{ $bid->id }}">
                        <td>{{ $bid->commodity->name }}</td>
                        <td>{{ $bid->shop->name }}</td>
                        <td>{{ $bid->price }}</td>
                        <td>{{ $bid->quantity }}</td>
                        <td>{{ $bid->reporter->name }}</td>
                        <td>{{ $bid->created_at->diffForHumans(Carbon\Carbon::now(), true) }}</td>
                        <td>
                            <button class="btn btn-success" onclick="$(this).addClass('disabled'); allow({{ $bid->id }})">Allow</button>
                            <button class="btn btn-danger" onclick="$(this).addClass('disabled'); deny({{ $bid->id }})">Delete</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>

        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
    function allow(bidId) {
        $.post('{{ route('admin.moderation.bids.update', null) }}/' + bidId, {
            _method: 'PATCH',
            _token: window.Laravel.csrfToken,
            requires_moderation: 0
        }).done(function() {
            $('#bid_' + bidId).remove();
        }).fail(function(e) {
            console.log(e);
            alert('Something went wrong!');
        });
    }

    function deny(bidId) {
        $.post('{{ route('admin.moderation.bids.destroy', null) }}/' + bidId, {
            _method: 'DELETE',
            _token: window.Laravel.csrfToken
        }).done(function() {
            $('#bid_' + bidId).remove();
        }).fail(function(e) {
            console.log(e);
            alert('Something went wrong!');
        })
    }
</script>
@endpush