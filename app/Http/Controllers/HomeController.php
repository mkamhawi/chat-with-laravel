<?php

namespace App\Http\Controllers;


use App\Conversation;
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
        $user = User::find(Auth::id());
        $user->status = 'online';
        $user->save();
        $users = User::Where('id', '!=', Auth::id())
            ->with(['conversations' => function ($query) {
                $query->whereHas('users', function($query) {
                    $query->where('id', '==', Auth::id())->get();
                })->get();
            }])
            ->select(['id', 'name', 'email', 'status'])
            ->cursor();
        return view('home', compact('users'));
    }
}