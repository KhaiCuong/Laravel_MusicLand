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




        return view('authentication.login');

    }

    public function processLogin(Request $request)
    {
        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
        ];
        if ($user = Sentinel::authenticate($credentials)) {
            $user = Sentinel::getUser();
            // $role = Sentinel::getRoleRepository()->findBySlug('admin');

            // if(!$user->inRole($role)){
            //     return redirect()->route('home');
            // } else {
            //     return redirect()->route('home');
            // }
            return redirect()->route('home');
           
        // } else {
        //     // wrong username or password
        //     return view('authentication.login');

        //     if (!$user->inRole($role)) {
        //         return redirect()->route('home');
        //     }
            // } else {
            //     return redirect()->route('admin.index');
            // }

        // else {
            // wrong username or password
        //     return view('authentication.login');

        // }
     
    }
}
}
