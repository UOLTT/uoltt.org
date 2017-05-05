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
@endpush

@section('content')

    <h1 class="page-header">Report a new location</h1>

    <form method="post">

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

            </tbody>

        </table>

    </form>

@endsection