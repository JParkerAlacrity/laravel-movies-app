<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];
    
    public function actors(){

        return $this->belongsToMany(Actor::class);
    }
    
    public function url(){

        return route('movies.show', $this->id);
    }
}