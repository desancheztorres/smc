<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
    protected $table = 'financials';
    protected $fillable = ['name', 'logo', 'minLoan' , 'maxLoan' , 'minTerm' , 'maxTerm' , 'apr' , 'lender' , 'rep' , 'details' , 'url'];

    public function category() {
        return $this->belongsTo('App\FinancialCategory');
    }
}
