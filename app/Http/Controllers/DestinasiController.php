<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Destinasi;

class DestinasiController extends Controller
{

    public function index()
    {
        $destinasi = Destinasi::all();
        return view('destinasi', compact('destinasi'));
    }

    public function show($id)
    {
        $destinasi = Destinasi::find($id);
        if (!$destinasi) {
            return redirect('/destinasi')->with('error', 'Destinasi tidak ditemukan');
        }
        return view('booking-destinasi', compact('destinasi'));
    }
}
