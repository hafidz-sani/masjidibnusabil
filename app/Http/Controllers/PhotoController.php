<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class PhotoController extends Controller
{
    public function index()
    {
        $galleries = Gallery::where('category', 'image')->get();
        return view('photo', compact('galleries'));
    }
}
