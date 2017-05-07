@extends('layouts.uoltt')

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

    <h1 class="page-header">Report a new location</h1>

    <table>

        <thead>
        <tr>
            <th>Option Name</th>
            <th>Option Value</th>
        </tr>
        </thead>

        <tbody>

        <tr>
            <td><label for="name">Location Name</label></td>
            <td>
                <input type="text" name="name" id="name">
            </td>
        </tr>
        <tr>
            <td><label for="system">System</label></td>
            <td>
                <select id="system" name="system_id">
                    <option selected disabled>Select...</option>
                    @foreach(\App\Models\System::orderBy('name')->get(['id','name']) as $system)
                        <option value="{{ $system->id }}">{{ $system->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>

        <tr>
            <td><label for="type">Celestial Body Type</label></td>
            <td>
                <select id="type" name="celestial_type_id">
                    <option selected disabled>Select...</option>
                    @foreach(\App\Models\CelestialType::orderBy('name')->get(['id','name']) as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>

        <tr>
            <td><label for="allegiance">Allegiance</label></td>
            <td>
                <select id="allegiance" name="allegiance_id">
                    <option selected disabled>Select...</option>
                    @foreach(\App\Models\Allegiance::orderBy('name')->get(['id','name']) as $allegiance)
                        <option value="{{ $allegiance->id }}">{{ $allegiance->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>

        <tr>
            <td><label for="affiliation">Affiliation</label></td>
            <td>
                <select id="affiliation" name="affiliation_id">
                    <option selected disabled>Select...</option>
                    @foreach(\App\Models\Affiliation::orderBy('name')->get(['id','name']) as $affiliation)
                        <option value="{{ $affiliation->id }}">{{ $affiliation->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <button style="width:100%" type="button" class="submit-button">Submit Location</button>
            </td>
        </tr>

        </tbody>

    </table>

@endsection

@push('scripts')
<script>

    // When the submit button is pressed
    $('.submit-button').on('click', function () {

        // Submit the data to the correct route
        $.post('{{ route('locations.store') }}', {
            name: $('#name').val(),
            system_id: $('#system').val(),
            celestial_type_id: $('#type').val(),
            allegiance_id: $('#allegiance').val(),
            affiliation_id: $('#affiliation').val(),
            _token: '{{ csrf_token() }}'
        })
        // When the request finishes successfully
            .done(function (Response) {
                // Notify user of success
                swal({
                    title: "Location Submitted",
                    text: "The location \"" + Response['name'] + "\" has been added to the database, an administrator will be notified to ensure data integrity shortly.",
                    type: "success"
                }, function () {
                    // Redirect back to the locations index page
                    window.location.replace('{{ route('locations.index') }}')
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