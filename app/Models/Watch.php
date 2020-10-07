<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Watch extends Pivot
{
    use HasFactory;

    // protected $table = "watches";
    protected $fillable = [
        'user_id',
        'movie_id'
    ];

    public function movies(){

        return $this->belongsTo(Movies::class);
    }

    public function users(){

        return $this->belongsTo(User::class);
    }
}
