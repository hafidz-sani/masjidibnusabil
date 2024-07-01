<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KajianController extends Controller
{
    public function index()
    {
        // Tampilankan view 'photo.blade.php'
        return view('kajian');
    }
}
