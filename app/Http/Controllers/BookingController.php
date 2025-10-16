<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Destinasi;
use App\Models\Booking;

class BookingController extends Controller
{
    // Data harga dan tujuan sekarang diambil dari database

    public function index(Request $request)
    {
    $destinasi = Destinasi::all();
    $destinasi_id = $request->input('destinasi_id', $destinasi->first()?->id);
    $jumlah = $request->input('jumlah', 1);
    $selectedDestinasi = $destinasi->where('id', $destinasi_id)->first();
    $harga = $selectedDestinasi ? $selectedDestinasi->harga : 0;
    $total = $harga * $jumlah;
    return view('booking', compact('destinasi', 'destinasi_id', 'jumlah', 'total'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'destinasi_id' => 'required|exists:destinasi,id',
            'tanggal' => 'required|date',
            'jumlah' => 'required|integer|min:1'
        ]);

        $destinasi = Destinasi::find($request->destinasi_id);
        if (!$destinasi) {
            return redirect('/booking')->with('error', 'Destinasi tidak ditemukan.');
        }
        $jumlah = $request->jumlah;
        $harga = $destinasi->harga;
        $total = $harga * $jumlah;

        Booking::create([
            'nama' => $request->nama,
            'destinasi_id' => $destinasi->id,
            'tanggal' => $request->tanggal,
            'jumlah' => $jumlah,
            'total' => $total
        ]);

        return redirect('/booking')->with('success', 'Booking berhasil!');
    }

    public function listBookings()
    {
    $bookings = Booking::with('destinasi')->latest()->get();
    return view('bookings', compact('bookings'));
    }

    public function storeDestinasi(Request $request)
    {
        // Fitur booking destinasi khusus, jika ingin pakai database, perlu disesuaikan juga seperti store()
        // Untuk sekarang, kosongkan/disable agar tidak error
        return redirect('/booking')->with('error', 'Fitur booking destinasi belum diupdate ke database.');
    }
}
