<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','date','work_start','work_end'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\user');
    }

    public function rest()
    {
        return $this->hasMany(rest::class);
    }
}
