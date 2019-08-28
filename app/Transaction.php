<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    protected $fillable = ['card_id', 'activity_id', 'ticket_id', 'member_id'];
    //
    public function cards()
    {
      return $this->hasMany(Card::class);
    }

    public function activities()
    {
      return $this->hasMany(Activity::class);
    }

    public function bookings()
    {
      return $this->hasMany(Booking::class);
    }

    public function members()
    {
      return $this->hasMany(Member::class);
    }

}
