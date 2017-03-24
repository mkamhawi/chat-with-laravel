<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function conversation() {
        return $this->belongsTo('App\Conversation');
    }

    public function sender() {
        return $this->belongsTo('App\User');
    }
}
