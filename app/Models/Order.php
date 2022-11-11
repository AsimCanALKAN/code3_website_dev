<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];
    

    public function type(){
        return $this->belongsTo(OrderType::class);
    }

    public function process(){
        return $this->belongsTo(OrderProcess::class);
    }

    public function error(){
        return $this->belongsTo(OrderError::class);
    }

    public function brekout_type(){
        return $this->belongsTo(OrderBreakoutType::class);
    }
}
