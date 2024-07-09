<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Tampilankan view 'dashboard.blade.php'
        return view('dashboard/index');
    }
}
