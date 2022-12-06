<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['subject','inquiry','email','name','phase_flag']; //保存したいカラム名が複数の場合
}
