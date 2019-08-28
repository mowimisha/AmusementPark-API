<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
