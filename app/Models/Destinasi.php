<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Destinasi extends Model
{
    use HasFactory;
    protected $table = 'destinasi';
    protected $fillable = [
        'nama', 'harga', 'deskripsi', 'gambar'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
