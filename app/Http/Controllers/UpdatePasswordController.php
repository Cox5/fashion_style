<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class UpdatePasswordController extends Controller
{
    //
    /*
     * Ensure the user is signed in to access this page
     */
    public function __construct() {
 
        $this->middleware('auth');
 
    }
    /**
     * Show the form to change the user password.
     */
    public function index(){
        return view('/change-password');
    }
 
    /**
     * Update the password for the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request)
    {
        # Validate passwords
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);
 
        $user = User::find(Auth::id());
        $hashedPassword = $user->password;
 
        if (Hash::check($request->old_password, $hashedPassword)) {
            //Change the password
            $user->fill([
                'password' => bcrypt($request->password)
            ])->save();
 
            return back()->with('success', 'Password changed successfully');
        }
 
        return back()->with('error', 'Error changing password');
    }
}
