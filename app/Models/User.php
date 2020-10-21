<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    const TYPE_CONSUMER = 1;

    const TYPE_HOSPITAL = 2;

    public function blood_store()
    {
        return $this->hasMany(BloodStore::class);
    }
    public function blood_requests()
    {
        if ($this->type == self::TYPE_HOSPITAL) {
            return $this->hasMany(BloodRequest::class, 'hospital_id', 'id');
        }
        return $this->hasMany(BloodRequest::class, 'consumer_id', 'id');
    }
}
