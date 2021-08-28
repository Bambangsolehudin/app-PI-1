<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class WelcomeController extends Controller
{
    public function barangall()
    {
        $barang = Barang::where('status', 'ditemukan')->get();
        return view('welcome', compact('barang'));
    }
}
