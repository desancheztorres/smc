<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];

    public function blogs() {
        return $this->belongsToMany('App\Blog', 'blog_keyword');
    }
}
