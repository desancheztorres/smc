<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $table = 'loans';
    protected $fillable = ['name', 'logo', 'minLoan' , 'maxLoan' , 'minTerm' , 'maxTerm' , 'apr' , 'lender' , 'rep' , 'details' , 'url'];

    public function category() {
        return $this->belongsTo('App\LoanCategory');
    }
}
