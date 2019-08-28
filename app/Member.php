<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    protected $fillable = ['firstname', 'lastname', 'email', 'phone', 'member_type'];

    public function account()
    {
        return $this->hasOne(Account::class);
    }

    public function transactions()
    {
      return $this->hasMany(Transaction::class);
    }

    public function bookings()
    {
      return $this->hasMany(Booking::class);
    }

    public function card()
    {
        return $this->hasOne(Card::class);
    }
}
