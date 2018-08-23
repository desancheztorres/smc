<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = 'cards';
    protected $fillable = ['name', 'logo', 'title1' , 'title2' , 'title3' , 'description1' , 'description2' , 'description3' , 'info1' , 'info2' , 'example' , 'link'];

    public function category() {
        return $this->belongsTo('App\CardCategory');
    }
}
