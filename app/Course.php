<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_name',
        'user_id',
    ];

    protected $table = 'courses';

    public function category()
    {
    	return $this->hasMany('App\Category');
    }
    public function user()
    {
        return $this->belongsTO('App\User', 'user_id');
    }
}
