<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
//        $request->session()->put(['meezy'=>'master instructor']);
//                    OR

//        session(['Olakunle' => 'Bossman']);
//
//        return session('Olakunle');
//        $request->session()->forget('meezy');
//       $request->session()->flush();
//
//        return $request->session()->all();

//                OR
//        return $request->getSession('peter');
//        return view('home');

//        $request->session()->flash('message', 'This iis the message');

        return session('message');
    }
}
