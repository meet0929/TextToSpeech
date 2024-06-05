<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubscription extends Model
{
    use HasFactory;

    public function subscription()
    {
        return $this->hasOne(Subscription::class,'id','subscription_id');
    }
    
}
