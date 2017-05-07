@extends('layouts.uoltt')

@section('nav-header','Report')

@push('styles')
<style>
    input, textarea {
        width: 99%;
    }

    select, input {
        border-radius: 2px;
    }

    select {
        width: 100%;
    }

    table {
        width: 75%;
    }
</style>
<script src="{{ url('js/sweetalert.min.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ url('css/sweetalert.css') }}">
@endpush

@section('content')

    <h1 class="page-header">Report Commodity</h1>

    <table>

        <thead>
        <tr>
            <th>Option Name</th>
            <th>Option Value</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>
                <label for="name">Name</label>
            </td>
            <td>
                <input type="text" id="name" name="name">
            </td>
        </tr>
        <tr>
            <td>
                <label for="description">Description</label>
            </td>
            <td>
                <textarea name="description" id="description"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label for="mass">Mass</label>
            </td>
            <td>
                <input type="number" step="1" min="0" id="mass">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button style="width:100%" type="button" id="submit">Report</button>
            </td>
        </tr>
        </tbody>

    </table>

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