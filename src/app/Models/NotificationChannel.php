<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\NotificationTemplate;
use App\Models\Notification;

class NotificationChannel extends Model
{
    protected $fillable = [
        'name',
    ];

    public function notification_templates(){
        return $this->hasMany(NotificationTemplate::class, 'channel_id');
    }
    public function notifications(){
        return $this->hasMany(Notification::class, 'channel_id');
    }
}
