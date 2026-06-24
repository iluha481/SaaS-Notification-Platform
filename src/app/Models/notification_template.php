<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class notification_template extends Model
{
    protected $fillable = [
        'name',
        'channel_id',
        'subject',
        'body',
    ];

    public function notification_channel(){
        return $this->belongsTo(Notification_channel::class, 'channel_id');
    }
    public function notifications(){
        return $this->hasMany(notification::class, 'template_id');
    }
}
