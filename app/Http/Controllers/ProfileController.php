<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|string',
            'email'    => 'required|email',
            'password' => 'string',
        ]);

        \Auth::user()->name = $request->get('name');
        \Auth::user()->email = $request->get('email');

        if ($request->has('password')) {
            \Auth::user()->password = \Hash::make($request->get('password'));
        }

        \Auth::user()->save();

        \Session::flash('message', 'Your profile information has been updated!');

        return redirect()->to(route('profile.view'));
    }

    public function view()
    {
        return view('profile.view');
    }
}
