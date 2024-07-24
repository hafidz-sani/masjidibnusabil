<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;


class VideoController extends Controller
{
    public function index()
    {
        $galleries = Gallery::where('category', 'video')->get();
        return view('video', compact('galleries'));
    }
}
