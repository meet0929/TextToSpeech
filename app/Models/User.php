<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\UserCountry;
use App\Models\UserSubscription;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
         'email',
        'password',
         'facebook_id'
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
        'password' => 'hashed',
    ];
     public function countries()
    {
        return $this->belongsToMany(Country::class, 'user_countries')->withTimestamps();
    }
      public function subscriptions()
    {
        return $this->belongsToMany(Subscription::class, 'user_subscriptions')->withTimestamps();
    }

   public function userSubsc()
    {
        return $this->hasOne(UserSubscription::class)->orderBy('id', 'desc');
    }
}
