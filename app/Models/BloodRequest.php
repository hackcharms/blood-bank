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
        'status'
    ];
    protected $table = "blood_requests";
    const STATUS_FAILED = 0;
    const STATUS_SUCCESS = 1;
    const STATUS_PENDING = 2;

    public function blood_store()
    {
        return $this->belongsToMany(BloodStore::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
