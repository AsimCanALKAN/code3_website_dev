<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breakout extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];
    

    public function breakoutType()
    {
        return $this->belongsTo(BreakoutType::class);
    }

    public function pair()
    {
        return $this->belongsTo(Pair::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
