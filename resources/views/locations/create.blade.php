@extends('layouts.uoltt-bootstrap')

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

    <h1>Report a new location</h1>

    <div class="row">
        <div class="col-md-7 col-md-offset-1">

            <div class="row">

                <div class="col-md-4">
                    <label for="name">Location Name</label>
                </div>

                <div class="col-md-8">
                    <input class="form-control" type="text" name="name" id="name">
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
                    <label for="type">Celestial Body Type</label>
                </div>

                <div class="col-md-8">
                    <select class="form-control" id="type" name="celestial_type_id">
                        <option selected disabled>Select...</option>
                        @foreach(\App\Models\CelestialType::orderBy('name')->get(['id','name']) as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="row">

                <div class="col-md-4">
                    <label for="allegiance">Allegiance</label>
                </div>

                <div class="col-md-8">
                    <select class="form-control" id="allegiance" name="allegiance_id">
                        <option selected disabled>Select...</option>
                        @foreach(\App\Models\Allegiance::orderBy('name')->get(['id','name']) as $allegiance)
                            <option value="{{ $allegiance->id }}">{{ $allegiance->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="row">

                <div class="col-md-4">
                    <label for="affiliation">Affiliation</label>
                </div>

                <div class="col-md-8">
                    <select class="form-control" id="affiliation" name="affiliation_id">
                        <option selected disabled>Select...</option>
                        @foreach(\App\Models\Affiliation::orderBy('name')->get(['id','name']) as $affiliation)
                            <option value="{{ $affiliation->id }}">{{ $affiliation->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <button type="button" class="btn btn-block btn-primary">Submit Location</button>
                </div>
            </div>

        </div>
    </div>

@endsection

@push('scripts')
<script>

    // When the submit button is pressed
    $('button').on('click', function () {

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