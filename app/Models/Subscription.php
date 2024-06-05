<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'package_name',
        'price',
        'type',
        'days',
        'characters_allowed',
        'currency',
        'description'

    ];

     public function users()
    {
        return $this->belongsToMany(User::class, 'user_subscriptions')->withTimestamps();
    }
}
