<?php

namespace App\Http\Controllers;

use App\Conversation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConversationController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $recipientId
     * @return \Illuminate\Http\Response
     */
    public function create($recipientId)
    {
        $conversation = new Conversation();
        $conversation->save();

        $sender = User::find(Auth::id());
        $recipient = User::find($recipientId);
        $sender->conversations()->attach($conversation->id);
        $recipient->conversations()->attach($conversation->id);
        return redirect('conversation/'.$conversation->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Conversation $conversation
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show($id)
    {
        $senderId = Auth::id();
        $conversation = Conversation::with('messages')
            ->where('id', $id)
            ->first();
        $messages = $conversation->messages;

        return view('conversations.show', compact('conversation', 'senderId', 'messages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
