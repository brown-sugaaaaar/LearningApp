<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','content','category_id','thumb_name','display_flag']; //保存したいカラム名が複数の場合

    public function category ()
    {
        return $this->belongsTo('App\Category');
    }

    public function scopeActive($query)
    {
        return $query->where('display_flag',0);
    }
}
