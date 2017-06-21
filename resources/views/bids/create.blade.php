@extends('layouts.uoltt')

@push('styles')
<script src="{{ url('js/sweetalert.min.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ url('css/sweetalert.css') }}">
<style>
    .row {
        padding-bottom:10px;
    }
</style>
@endpush

@section('content')

    <h1>Report a new commodity bid</h1>

    <div class="row">
        <div class="col-md-7 col-md-offset-1">

            <div class="row">

                <div class="col-md-4">
                    <label for="commodity">Commodity</label>
                </div>

                <div class="col-md-8">
                    <select name="commodity_id" class="form-control" id="commodity">
                        @foreach(\App\Models\Commodity::orderBy('name','asc')->get(['id','name']) as $commodity)
                            <option value="{{ $commodity->id }}">{{ $commodity->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="row">

                <div class="col-md-4">
                    <label for="system">System</label>
                </div>

                <div class="col-md-8">
                    <select class="form-control" id="system" name="system_id">
                        <option selected disabled>Select...</option>
                        @foreach(\App\Models\System::orderBy('name')->get(['id','name']) as $system)
                            <option value="{{ $system->id }}">{{ $system->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="row">

                <div class="col-md-4">
                    <label for="location">Location</label>
                </div>

                <div class="col-md-8">
                    <select class="form-control" id="location" name="system_id">
                        <option selected disabled>Select...</option>
                    </select>
                </div>

            </div>

            <div class="row">

                <div class="col-md-4">
                    <label for="shop">Shop</label>
                </div>

                <div class="col-md-8">
                    <select class="form-control" id="shop" name="shop_id">
                        <option selected disabled>Select...</option>
                    </select>
                </div>

            </div>

            <div class="row">

                <div class="col-md-4">
                    <label for="price">Price per item</label>
                </div>

                <div class="col-md-8">
                    <input class="form-control" id="price" name="price" type="number" min="0" step="0.1">
                </div>

            </div>

            <div class="row">

                <div class="col-md-4">
                    <label for="quantity">Quantity available</label>
                </div>

                <div class="col-md-8">
                    <input class="form-control" id="quantity" name="price" type="number" min="0" step="1">
                </div>

            </div>


            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <button type="button" class="btn btn-block btn-primary">Submit Bid Report</button>
                </div>
            </div>

        </div>
    </div>

@endsection

@push('scripts')
<script>

    var Locations = $.parseJSON('{!! $Locations->toJson() !!}');

    var Systems = $.parseJSON('{!! $Systems->toJson() !!}');

    $('#location').on('change',function() {

        var Shops = $.grep(Locations,function(e) {
            return e['id'] == $('#location').val();
        })[0]['shops'].sort(function(a,b) {
            return a.name.localeCompare(b.name);
        });

        $('#shop').html("");

        $.each(Shops,function(index,Shop) {
            $('#shop').append('<option value="' + Shop['id'] + '">' + Shop['name'] + '</option>');
        })

    });

    $('#system').on('change',function() {

        var Locations = $.grep(Systems,function(e) {
            return e['id'] == $('#system').val();
        })[0]['locations'].sort(function(a,b) {
            return a.name.localeCompare(b.name);
        });

        $('#location').html("");

        $.each(Locations,function(index,Location) {
            $('#location').append('<option value="' + Location['id'] + '">' + Location['name'] + '</option>');
        })

    });

    // When the submit button is pressed
    $('button').on('click', function () {

        // Submit the data to the correct route
        $.post('{{ route('bids.store') }}', {
            commodity_id: $('#commodity').val(),
            shop_id: $('#shop').val(),
            price: $('#price').val(),
            quantity: $('#quantity').val(),
            _token: '{{ csrf_token() }}'
        })
        // When the request finishes successfully
            .done(function (Response) {
                // Notify user of success
                swal({
                    title: "Bid Submitted",
                    text: "Bid #" + Response['id'] + " has been added to the database, an administrator will be notified to ensure data integrity shortly.",
                    type: "success"
                }, function () {
                    // Redirect back to the locations index page
                    window.location.replace('{{ route('bids.index') }}')
                });
            })
            // If the request fails
            .fail(function () {
                // Display an error message
                swal(
                    "Oops...",
                    "It looks like there may have been an issue with your input, double check it and try again?",
                    "error"
                );
            })
    });
</script>
@endpush