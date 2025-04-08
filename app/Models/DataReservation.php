<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataReservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_name',
        'guest_email',
        'check_in_date',
        'check_out_date',
        'room_type',
        'status',
    ];

    protected $table = 'data_reservations';
}
