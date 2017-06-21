@extends('layouts.uoltt')

@section('content')

    <div class="page-header">
        <h1>{{ ucfirst(\Auth::user()->name) }}'s Profile</h1>
    </div>

    <div class="row">

        <div class="col-md-4">
            <p>Here you can edit your profile information</p>
        </div>

        <div class="col-md-8">
            <form action="{{ route('profile.update') }}" method="post">

                <table class="table table-responsive">
                    <tbody>
                    <tr>
                        <th><label for="username">Username</label></th>
                        <td>
                            <input class="form-control" id="username" type="text" name="name" value="{{ \Auth::user()->name }}">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="email">Email Address</label></th>
                        <td>
                            <input class="form-control" id="email" type="text" name="email" value="{{ \Auth::user()->email }}">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="password">Password</label></th>
                        <td>
                            <input type="password" class="form-control" id="password" data-toggle="tooltip" title="Leave blank to keep current password">
                            @push('scripts')
                            <script>
                                $(document).ready(function() {
                                    $('[data-toggle="tooltip"]').tooltip();
                                });
                            </script>
                            @endpush
                        </td>
                    </tr>
                    </tbody>
                </table>

                {!! csrf_field() !!}

                <input type="submit" class="btn btn-primary" value="Update Profile">

            </form>
        </div>

    </div>

@endsection