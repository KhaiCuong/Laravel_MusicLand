<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;
use App\Models\User;

use Sentinel;

class AuthenticationController extends Controller
{



    public function login()
    {
        // $credentials = [
        //     'email'    => 'dkc@gmail.com',
        //     'password' => '123',
        // ];
        // $user = Sentinel::registerAndActivate($credentials);




        return view('authentication.login');
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email','password');

     
        Session::put('email', $credentials['email']);

        if (Auth::attempt($credentials)) {

            // $role = Sentinel::getRoleRepository()->findBySlug('admin');

            // if(!$user->inRole($role)){
            //     return redirect()->route('home');
            // } else {
            //     return redirect()->route('home');
            // }
            return redirect()->route('home');
        } else {
            //     // wrong username or password
            return view('authentication.login');

            //     if (!$user->inRole($role)) {
            //         return redirect()->route('home');
            //     }
            // } else {
            //     return redirect()->route('admin.index');
            // }

            // else {
            // wrong username or password
            //     return view('authentication.login');

        }
    }

    public function logout() {

        Auth::logout();
        return redirect()->route('home');
    }


 

}
