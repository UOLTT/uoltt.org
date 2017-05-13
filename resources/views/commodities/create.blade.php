@extends('layouts.uoltt-bootstrap')

@section('nav-header','Report')

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

    <h1>Report Commodity</h1>

    <div class="row">
        <div class="col-md-7 col-md-offset-1">

            <div class="row">

                <div class="col-md-6">
                    <label for="name">Name</label>
                </div>

                <div class="col-md-6">
                    <input class="form-control" type="text" id="name" name="name">
                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <label for="description">Description</label>
                </div>

                <div class="col-md-6">
                    <textarea class="form-control" name="description" id="description"></textarea>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <label for="mass">Mass</label>
                </div>

                <div class="col-md-6">
                    <input class="form-control" type="number" step="1" min="0" id="mass">
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 col-md-offset-6">
                    <button class="btn btn-primary btn-block" type="button" id="submit">Report</button>
                </div>

            </div>

        </div>
    </div>

@endsection

@push('scripts')
<script>
$('#submit').on('click',function() {

    $.post('{{ route('commodities.store') }}',{
        _token: '{{ csrf_token() }}',
        name: $('#name').val(),
        description: $('#description').val(),
        mass: $('#mass').val()
    })
        // When the request finishes successfully
        .done(function (Response) {
            // Notify user of success
            swal({
                title: "Commodity Submitted",
                text: "The commodity \"" + Response['name'] + "\" has been added to the database, an administrator will be notified to ensure data integrity shortly.",
                type: "success"
            }, function () {
                // Redirect back to the locations index page
                window.location.replace('{{ route('commodities.index') }}')
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