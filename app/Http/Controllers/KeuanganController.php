<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Finance;

class KeuanganController extends Controller
{
    public function index()
    {
        // Tampilankan view 'photo.blade.php'
        $finances = Finance::all();
        return view('keuangan',compact('finances'));
        
    }
}
