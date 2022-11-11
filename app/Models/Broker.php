<?php

namespace App\Models;

use Illuminate\Support\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];
    

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }

    public function account(){
        return $this->belongsTo(Account::class);
    }

    // get date M d Y formatted attribute from created_at
    public function getCreatedAtReadableAttribute()
    {
        $createdAt = Carbon::parse($this->created_at);
        return $createdAt->format('M d Y');
    }
}
