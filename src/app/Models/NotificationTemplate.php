<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\NotificationChannel;
use App\Models\notification;

class NotificationTemplate extends Model
{
    protected $fillable = [
        'name',
        'channel_id',
        'subject',
        'body',
    ];

    public function notification_channel(){
        return $this->belongsTo(NotificationChannel::class, 'channel_id');
    }
    public function notifications(){
        return $this->hasMany(Notification::class, 'template_id');
    }
}
