<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class notification_channel extends Model
{
    protected $fillable = [
        'name',
    ];

    public function notification_templates(){
        return $this->hasMany(notification_template::class, 'channel_id');
    }
    public function notifications(){
        return $this->hasMany(notification::class, 'channel_id');
    }
}
