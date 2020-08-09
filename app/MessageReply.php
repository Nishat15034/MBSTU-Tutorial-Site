<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageReply extends Model
{
    protected $fillable = [
        'message',
        'message_id',
    ];

    protected $table = 'message_replies';
}
