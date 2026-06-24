<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class notification_log extends Model
{
    protected $fillable = [
        'notification_id',
        'status',
        'response',
        'attempt',
    ];

    public function notification(){
        return $this->belongsTo(notification::class);
    }
}
