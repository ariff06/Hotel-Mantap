<?php
// filepath: /c:/xampp/htdocs/HotelHebat/app/Models/Reservation.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'check_in',
        'check_out',
        'number_of_rooms',
        'guest_name',
        'guest_email',
        'room_type',
    ];
}