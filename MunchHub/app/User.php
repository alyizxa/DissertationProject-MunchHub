<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password','address','city','lat','lng'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        static::created(function ($user){
            $user->profile()->create([
                'profile_text' => 'Hello '.$user->username. ', this is your profile, click the edit button to change your profile text',
            ]);
        });
    }

    public function posts(){
        return $this->hasMany(Post::class)->orderBy('created_at', 'DESC');
    }
    public function profile(){
        return $this->hasOne(Profile::class);
    }
    public function vendorType(){
        return $this->hasMany(Vendortype::class);
    }
}
