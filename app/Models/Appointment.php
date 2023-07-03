<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'phone',
        'doctor_name',
        'appointment_date',
        'message',
        'status',
        'user_id',
    ];

    public function User(){
        $this->belongsTo(User::class);
    }
}
