<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardCategory extends Model
{
    protected $table = 'card_categories';
    protected $fillable = ['name'];
    public $timestamps = false;

    public function cards() {
        return $this->hasMany('App\Card');
    }
}
