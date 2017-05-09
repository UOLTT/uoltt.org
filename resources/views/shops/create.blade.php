@extends('layouts.uoltt')

@section('nav-header','SHOP')

@push('styles')
<style>
    input {
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

    <h1 class="page-header">Report A New Shop Location</h1>

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
                <label for="system">System</label>
            </td>
            <td>
                <select id="system" name="system">
                    <option selected disabled></option>
                    @foreach($Systems->sortBy('name') as $system)
                        <option value="{{ $system->id }}">{{ $system->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="location">Location</label>
            </td>
            <td>
                <select id="location" name="location"></select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="affiliation">Affiliation</label>
            </td>
            <td>
                <select id="affiliation" name="affiliation">
                    <option selected disabled></option>
                    @foreach(\App\Models\Affiliation::orderBy('name')->get(['id','name']) as $Affiliation)
                        <option value="{{ $Affiliation->id }}">{{ $Affiliation->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="allegiance">Allegiance</label>
            </td>
            <td>
                <select id="allegiance" name="allegiance">
                    <option selected disabled></option>
                    @foreach(\App\Models\Allegiance::orderBy('name')->get(['id','name']) as $Allegiance)
                        <option value="{{ $Allegiance->id }}">{{ $Allegiance->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button style="width:100%" type="button" id="submitButton">Submit Shop</button>
            </td>
        </tr>
        </tbody>

    </table>

@endsection

@push('scripts')
<script>

    var Systems = $.parseJSON('{!! $Systems->toJson() !!}');

    $('#system').on('change',function() {

        var Locations = $.grep(Systems,function(e) {
            return e['id'] == $('#system').val();
        })[0]['locations'].sort(function(a,b) {
            return a.name.localeCompare(b.name);
        });

        console.log(Locations);

        $('#location').html("");

        $.each(Locations,function(index,Location) {
            $('#location').append('<option value="' + Location['id'] + '">' + Location['name'] + '</option>');
        })

    });

    // When the submit button is pressed
    $("#submitButton").on('click',function() {

        // Submit the data to the correct route
        $.post('{{ route('shops.store') }}',{
            _token: '{{ csrf_token() }}',
            location_id: $('#location').val(),
            affiliation_id: $('#affiliation').val(),
            allegiance_id: $('#allegiance').val(),
            name: $('#name').val()
        })
            // When the request finishes successfully
            .done(function(Response) {
                // Notify user of success
                swal({
                    title: "Shop Submitted",
                    text: "The shop \"" + Response['name'] + "\" has been added to the database, an administrator will be notified to ensure data integrity shortly.",
                    type: "success"
                }, function () {
                    // Redirect back to the locations index page
                    window.location.replace('{{ route('shops.index') }}')
                });
            })
            // If the request fails
            .fail(function() {
                // Display an error message
                swal(
                    "Oops...",
                    "It looks like there may have been an issue with your input, double check it and try again?",
                    "error"
                );
            });

    });

</script>
@endpush