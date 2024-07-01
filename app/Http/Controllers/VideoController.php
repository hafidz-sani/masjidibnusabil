<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        // Tampilankan view 'photo.blade.php'
        return view('video');
    }
}
