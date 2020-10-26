<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'consumer_id',
        'hospital_id',
        'blood_group',
        'unit',
        'status',
        'responded_at',
        'requested_at',
    ];
    protected $table = "blood_requests";
    protected $attributes = [
        'status' => 2
    ];
    const STATUS_DECLINED = 0;
    const STATUS_ACCEPTED = 1;
    const STATUS_PENDING = 2;

    public function blood_store()
    {
        return $this->belongsToMany(BloodStore::class);
    }

    // public function user()
    // {
    //     if($this->)
    //     return $this->belongsToMany(User::class, 'blood_requests', 'consumer_id', 'user_id');
    //     return $this->belongsToMany(User::class, 'blood_requests', 'consumer_id', 'user_id');
    // }
    public function getRequestedToAttribute()
    {
        return User::find($this->hospital_id)->first()->name;
    }

    public function getRequestedByAttribute()
    {
        return User::find($this->consumer_id)->first()->name;
    }
    public function getIsPendingAttribute()
    {
        return $this->status === self::STATUS_PENDING;
    }
    public function getIsAcceptedAttribute()
    {
        return $this->status === self::STATUS_ACCEPTED;
    }
    public function getIsDeclinedAttribute()
    {
        return $this->status === self::STATUS_DECLINED;
    }
    public function scopeAccepted($query)
    {
        return $query->where('status', BloodRequest::STATUS_ACCEPTED);
    }

    public function scopePending($query)
    {
        return $query->where('status', BloodRequest::STATUS_PENDING);
    }
}
