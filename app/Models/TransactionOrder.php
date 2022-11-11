<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionOrder extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function pair(){
        return $this->belongsTo(Pair::class);
    }

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
