<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //Eloquentのマスアサインメントでは事前に登録できる項目を宣言しておく必要がある
    //fillable 変数に配列で宣言
    protected $fillable = ['title', 'body', 'published_at'];
}
