<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Notification;

class NotificationLog extends Model
{
    protected $fillable = [
        'notification_id',
        'status',
        'response',
        'attempt',
    ];

    public function notification(){
        return $this->belongsTo(Notification::class);
    }
}
