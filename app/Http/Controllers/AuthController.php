<?php namespace App\Http\Controllers;

use Input, Validator, Auth, Hash, Redirect;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\User;

class AuthController extends Controller {

	public function getSignInForm() {
        return view('sign-in');
    }

    public function processSignInForm() {
        $validator = Validator::make(Input::all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput(Input::except('password'));;
        }

        try {
            $user = User::where('email', '=', Input::get('email'))->firstOrFail();
        }
        catch (ModelNotFoundException $e) {
            return redirect()->back()->with('message_error', 'Invalid email and password combination.')->withInput(Input::except('password'));
        }

        if (!Hash::check(Input::get('password'), $user->password)) {
            return redirect()->back()->with('message_error', 'Invalid email and password combination.')->withInput(Input::except('password'));
        }

        if ($user->confirm != 1) {
            return redirect()->back()->with('message_error', 'You must confirm your account before attempting to sign in.')->withInput(Input::except('password'));
        }

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function signOut() {
        Auth::logout();

        return redirect()->route('sign-in');
    }

}
