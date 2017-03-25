@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>
                <div class="panel-body">
                    @foreach($users as $user)
                        <a href="conversation/{{ $user->conversations->first->id ? $user->conversations->first->id['id'] : 'create/' . $user->id }}">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 style="margin-left: 10px;">
                                    <span style="margin: 0 15px 0 0;">{{ $user->status }}</span>
                                    {{ $user->name }}
                                    <span style="margin: 0 15px;">({{ $user->email }})</span>
                                </h5>
                            </div>
                        </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
