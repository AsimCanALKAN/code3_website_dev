<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];
    

    public function broker(){
        return $this->belongsTo(Broker::class);
    }

    public function pair(){
        return $this->belongsTo(Pair::class);
    }

    public function group(){
        return $this->belongsTo(Group::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
