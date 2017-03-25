@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @foreach($messages as $message)
                            <div class="row">
                                <div class="col-md-12">
                                    <p><strong>{{ $message->sender->name }}: </strong> {{ $message->message }}</p>
                                </div>
                            </div>
                        @endforeach
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" action="/messages">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="sender" value="{{ $senderId }}">
                                        <input type="hidden" name="conversation" value="{{ $conversation->id }}">
                                        <div class="form-group">
                                            <label for="new-message"></label>
                                            <input type="text" id="new-message" class="form-control" name="message">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
