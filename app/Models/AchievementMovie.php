<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchievementMovie extends Model
{
    use HasFactory;


    public function movieList(){
        $achievementMovieList=[];
        $achievementMovies=AchievementMovie::all();
        $achievements=Achievement::all();

        // foreach($achievements as $achievement){
        //     $achievementId = Achievement::all()
        //     $achievementMovies = AchievementMovie::where('achievement_id','=',$achievementId)
        //     if($achievementMovies)
            
        return $achievementMovies=AchievementMovie::all();
    }
}
        
    



