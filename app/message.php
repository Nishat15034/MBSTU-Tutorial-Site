<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $fillable = [
        'email',
        'name',
        'message',
    ];

    protected $table = 'messages';
}
