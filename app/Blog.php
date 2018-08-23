<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = ['title', 'content', 'image', 'slug', 'category_id', 'meta_description', 'subtitle', 'status', 'alt_image'];

    public function category() {
        return $this->belongsTo('App\BlogCategory');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
    public function keywords() {
        return $this->belongsToMany('App\Keyword');
    }

}
