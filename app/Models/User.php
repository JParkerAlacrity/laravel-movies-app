<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    
    // public function movies(){
    //     return $this->hasMany(Movie::class);
    // }

    public function watches()
    {
        return $this->hasMany(Watch::class);
    }

    public function usersWatchedMovies()
    {
        return $this->belongsToMany(Movie::class)->using(Watch::class);
    }

    // public function  compareWatches(){
        
    //     $watchedMovies = $this->usersWatchedMovies();
    //     $achievementMovies = Achievements::where('movie_id', '=', Input::get('email'))->first();
    //     $achievements = Achievements::all;
    //     $comparison = [];
    //     foreach($watchedMovies as $watchedMovie){
    //         if( in_array($watchedMovie->id,)){
                
    //         }
    //     }
    // }
}
