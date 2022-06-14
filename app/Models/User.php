<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles():BelongsToMany
    {
        return $this->belongsToMany(Roles::class);

    }


    public function centreinterets()
    
    {
        return $this->belongsToMany(CentreInteret::class, 'user_interets', 'users_id', 'ci_id' );
    }
    
    //post() de Florent
    public function post()
    {
        return $this->belongsTo(Posts::class, 'post_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
    public function likespost()
    {
        return $this->hasMany(Like::class, 'posts_id','user_id');
    }

    // public function amis()
    // {
    //     return $this->belongsToMany(Amis::class,'amis', 'amis_id', 'user_id');
    // }




    public function amis()
    {
        return $this->belongsToMany(User::class, 'amis', 'user_id', 'amis_id')
            ->withPivot('accepted')
            ->withTimestamps();
    }
 
    public function amisde()
    {
        return $this->belongsToMany(User::class, 'amis', 'amis_id', 'user_id')
            ->withPivot('accepted')
            ->withTimestamps();
    }
}