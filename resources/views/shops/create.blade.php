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
            $('#location').append('<option id="' + Location['id'] + '">' + Location['name'] + '</option>');
        })

    });

</script>
@endpush