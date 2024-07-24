<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lecture;


class KajianController extends Controller
{
    public function index()
    {
        // Tampilankan view 'photo.blade.php'
        $lectures = Lecture::all();
        return view('kajian', compact('lectures'));
    }
}
