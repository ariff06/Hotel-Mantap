<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini
    protected $table = 'facilities';

    // Atribut yang dapat diisi
    protected $fillable = [
        'name',
        'floor',
        'operating_hours',
    ];
}
