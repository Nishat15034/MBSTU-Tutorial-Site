<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'topic_name',
        'sub_category_id',
        'user_id',
    ];

    protected $table = 'topics';

    public function subCategory()
    {
    	return $this->belongsTo('App\SubCategory','sub_category_id');
    }

    public function topicContent()
    {
    	return $this->hasMany('App\TopicContent');
    }
    public function user()
    {
        return $this->belongsTO('App\User', 'user_id');
    }
}
