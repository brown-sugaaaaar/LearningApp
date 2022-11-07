<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name']; //保存したいカラム名が複数の場合

    public function post ()
    {
        return $this->hasMany('App\Post');
    }
}
