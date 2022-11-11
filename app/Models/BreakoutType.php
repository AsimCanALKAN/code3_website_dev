<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakoutType extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];
    

    public function breakouts()
    {
        return $this->hasMany(Breakout::class);
    }
}
