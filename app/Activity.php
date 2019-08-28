<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $fillable = ['activity_name', 'activity_cordinator', 'activity_cost', 'activity_member_type', 'activity_status'];

    public function bookings()
    {
      return $this->hasMany(Booking::class);
    }
}
