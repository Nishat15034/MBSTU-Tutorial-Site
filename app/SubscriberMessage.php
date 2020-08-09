<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscriberMessage extends Model
{
    protected $fillable = [
        'title',
        'message',
    ];

    protected $table = 'subscriber_messages';
}
