<?php

namespace Koya;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username' ,'email', 'password', 'provider', 'provider_id', 'provider_token', 'avatar', 'cloudinary_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function videos()
    {
        return $this->hasMany('Koya\Video');
    }

    public function comments()
    {
        return $this->hasMany('Koya\Comments');
    }

    public function favourites()
    {
        return $this->hasManay('Koya\FavouriteVideo');
    }

}
