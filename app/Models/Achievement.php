<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'achievement',
        'ranking'
    ];

    public function url(){

        return route('achievement.show', $this->id);
    }

    
}
