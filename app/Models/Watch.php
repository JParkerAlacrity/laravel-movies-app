<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Watch extends Pivot
{
    use HasFactory;

    protected $table = 'mov_watches';

    public $timestamps = false;

    // protected $table = "watches";
    protected $fillable = [
        'user_id',
        'movie_id'
    ];

    public function movie(){

        return $this->belongsTo(Movies::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function achievement(){

        return $this->belongsTo(Achievement::class);
    }
}
