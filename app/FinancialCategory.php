<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinancialCategory extends Model
{
    protected $table = 'financial_categories';
    protected $fillable = ['name'];
    public $timestamps = false;

    public function financials() {
        return $this->hasMany('App\Financial');
    }
}
