<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanCategory extends Model
{
    protected $table = 'loan_categories';
    protected $fillable = ['name'];
    public $timestamps = false;

    public function loans() {
        return $this->hasMany('App\Loan');
    }

}
