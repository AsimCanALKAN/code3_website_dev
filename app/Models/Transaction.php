<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function breakout(){
        return $this->belongsTo(Breakout::class);
    }

    public function transaction_orders(){
        return $this->hasMany(TransactionOrder::class);
    }
}
