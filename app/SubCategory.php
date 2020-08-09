<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'category_id',
        'sub_category_name',
        'user_id',
    ];

    protected $table = 'sub_categories';

    public function category()
    {
    	return $this->belongsTo('App\Category','category_id');
    }

    public function topic()
    {
    	return $this->hasMany('App\topic');
    }
    public function user()
    {
        return $this->belongsTO('App\User', 'user_id');
    }
}
