@extends('layouts.uoltt')

@section('nav-header','SHOP')

@push('styles')
<style>
    .row {
        padding-bottom:10px;
    }
</style>
<script src="{{ url('js/sweetalert.min.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ url('css/sweetalert.css') }}">
@endpush

@section('content')

    <h1>Report A New Shop Location</h1>

    <div class="row">

        <div class="col-md-4">

        </div>

        <div class="col-md-8">

        </div>

    </div>


    <div class="row">
        <div class="col-md-7 col-md-offset-1">

            <div class="row">

                <div class="col-md-4">
                    <label for="name">Name</label>
                </div>

                <div class="col-md-8">
                    <input class="form-control" type="text" id="name" name="name">
                </div>

            </div>

            <div class="row">

                <div class="col-md-4">
                    <label for="system">System</label>
                </div>

                <div class="col-md-8">
                    <select class="form-control" id="system" name="system">
                        <option selected disabled></option>
                        @foreach($Systems->sortBy('name') as $system)
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
                    <select class="form-control" id="location" name="location"></select>
                </div>

            </div>

            <div class="row">

                <div class="col-md-4">
                    <label for="affiliation">Affiliation</label>
                </div>

                <div class="col-md-8">
                    <select class="form-control" id="affiliation" name="affiliation">
                        <option selected disabled></option>
                        @foreach(\App\Models\Affiliation::orderBy('name')->get(['id','name']) as $Affiliation)
                            <option value="{{ $Affiliation->id }}">{{ $Affiliation->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="row">

                <div class="col-md-4">
                    <label for="allegiance">Allegiance</label>
                </div>

                <div class="col-md-8">
                    <select class="form-control" id="allegiance" name="allegiance">
                        <option selected disabled></option>
                        @foreach(\App\Models\Allegiance::orderBy('name')->get(['id','name']) as $Allegiance)
                            <option value="{{ $Allegiance->id }}">{{ $Allegiance->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <button class="btn btn-block btn-primary" type="button" id="submitButton">Submit Shop</button>
                </div>
            </div>

        </div>
    </div>

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
                    window.location.replace('{{ route('shops.show',null) }}/' + Response['id']);
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