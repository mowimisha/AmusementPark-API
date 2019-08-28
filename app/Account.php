<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //

    protected $fillable = ['account_no', 'amount', 'balance', 'last_deposit'];

    public function members()
    {
      return $this->hasMany(Member::class);
    }


}
