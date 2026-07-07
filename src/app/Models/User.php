<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Notification;
use Spatie\Permission\Traits\HasRoles;

#[Fillable(['name', 'email', 'password', 'api_key', 'is_active', 'rate_limit'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable 
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, HasRoles;
  
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

}
