<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    use HasFactory;

    protected $guarded =[
        'id'
    ];
    public function user()
    {
        return $this->belongTo(user::class)
    }
    public function rest()
    {
        return $this->hasOne(rest::class);
    }
}
