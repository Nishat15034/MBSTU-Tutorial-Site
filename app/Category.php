<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name',
        'course_id',
        'user_id',
    ];

    protected $table = 'categories';

    public function subCategory()
    {
    	return $this->hasMany('App\SubCategory');
    }

    public function course()
    {
    	return $this->belongsTO('App\Course', 'course_id');
    }

    public function user()
    {
        return $this->belongsTO('App\User', 'user_id');
    }
}
