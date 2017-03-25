<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id', '!=', Auth::id())
            ->select(['id', 'name', 'email', 'status'])
            ->cursor();
        return view('home', compact('users'));
    }
}
