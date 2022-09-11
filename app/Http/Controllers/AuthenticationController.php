<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        return view('admins.login');
    }

    public function processLogin(Request $request)
    {
        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
        ];
        if ($user = Sentinel::authenticate($credentials)) {
            $user = Sentinel::getUser();
            $role = Sentinel::getRoleRepository()->findBySlug('admin');
            if(!$user->inRole($role)){
                return redirect()->route('layout.home');
            } else {
                return redirect()->route('layout.home');
            }
           
        } else {
            // wrong username or password
            return view('admins.login');
        }
    }
}
