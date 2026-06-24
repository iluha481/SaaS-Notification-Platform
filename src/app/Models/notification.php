<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
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
        return $this->belongsTo(notification_template::class, 'template_id');
    }

    public function notification_channel(){
        return $this->belongsTo(Notification_channel::class, 'channel_id');
    }

    public function logs(){
        return $this->hasMany(Notification_log::class);
    }
}
