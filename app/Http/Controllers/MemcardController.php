<?php

namespace App\Http\Controllers;
use Session;
use App\Models\User;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;

class MemcardController extends Controller
{
    public function mycard(Request $request)
    {

        $users = User::all();
        return view('memcard.mycard')->with([
            'users' => $users,

           
        ]);

    }

    public function extends(Request $request)
    {

        $users = User::all();
        return view('memcard.mycard')->with([
            'users' => $users,

           
        ]);

    }
}
