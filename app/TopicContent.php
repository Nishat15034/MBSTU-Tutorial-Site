<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicContent extends Model
{
	protected $fillable = [
        'topic_title',
        'topic_youtbe_url',
        'topic_description',
        'topic_id',
        'user_id',
    ];
    protected $table = 'topic_contents';

    public function topic()
    {
    	return $this->belongsTo('App\Topic','topic_id');
    }
    public function user()
    {
        return $this->belongsTO('App\User', 'user_id');
    }
}
