<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_categories';
    protected $fillable = ['name'];
    public $timestamps = false;

    public function blogs() {
        return $this->hasMany('App\Blog');
    }
}
