<?php namespace App\Http\Controllers;

use Input, Validator, Hash;

use App\Models\User;

class InstallController extends Controller {

	public function getInstallForm() {
		return view('install');
	}

    public function processInstallForm() {
        $validator = Validator::make(Input::all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput(Input::except('password'));;
        }

        $user = new User();

        $user->first_name = Input::get('first_name');
        $user->last_name = Input::get('last_name');
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->confirm = 1;
        $user->role_id = 1;

        $user->save();

        if (empty($user->id)) {
            return redirect()->back()->with('message_error', 'An unknown error occurred.')->withInput(Input::except('password'));;
        }
        else {
            return redirect()->route('sign-in')->with('message_success', 'Password Manager installed successfully. Please sign in below.');
        }
    }

}
