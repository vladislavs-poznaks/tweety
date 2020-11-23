<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'description',
        'avatar',
        'banner',
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
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value): string
    {
        return asset($value ?? '/images/default-avatar.jpeg');
    }

    public function getBannerAttribute($value): string
    {
        return asset($value ?? '/images/default-profile-banner.jpg');
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    public function timeline()
    {
        $ids = $this->follows()->pluck('id')->push($this->id);

        return Tweet::whereIn('user_id', $ids)
            ->withLikes()
            ->latest()
            ->paginate(50);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
