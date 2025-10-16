<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable = [
        'nama', 'destinasi_id', 'tanggal', 'jumlah', 'total', 'user_id'
    ];

    public function destinasi()
    {
        return $this->belongsTo(Destinasi::class);
    }

    // Relasi: Booking milik User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


// ketika tujuan di ubah pada form harga pada 