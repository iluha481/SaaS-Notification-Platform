<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\NotificationTemplate;
use App\Models\NotificationLog;
use App\Models\NotificationChannel;



class Notification extends Model
{
    protected $fillable = [
        'user_id',
        'template_id',
        'channel_id',
        'status',
        'payload',
        'scheduled_at',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function notification_template(){
        return $this->belongsTo(NotificationTemplate::class, 'template_id');
    }

    public function notification_channel(){
        return $this->belongsTo(NotificationChannel::class, 'channel_id');
    }

    public function logs(){
        return $this->hasMany(NotificationLog::class);
    }
}
