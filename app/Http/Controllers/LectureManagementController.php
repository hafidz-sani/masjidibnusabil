<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lecture;
use Illuminate\Http\Request;

class LectureManagementController extends Controller
{
    public function index()
    {
        $lectures = Lecture::all();
        return view('dashboard.admin.lecture.index', compact('lectures'));
    }

    public function create()
    {
        return view('dashboard.admin.lecture.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|string',
            'judul' => 'required|string',
            'kategori' => 'required|string',
        ]);

        Lecture::create($request->all());
        return redirect()->route('dashboard.admin.lecture.index')->with('success', 'Lecture record created successfully.');
    }

    public function show(Lecture $lecture)
    {
        return view('dashboard.admin.lecture.show', compact('lecture'));
    }

    public function edit(Lecture $lecture)
    {
        return response()->json($lecture);

        // return view('dashboard.admin.finance.edit', compact('finance'));
    }

    public function update(Request $request, Lecture $lecture)
    {
        $request->validate([
            'url' => 'required|string',
            'judul' => 'required|string',
            'kategori' => 'required|string',
        ]);

        $lecture->update($request->all());
        return redirect()->route('dashboard.admin.lecture.index')->with('success', 'Lecture record updated successfully.');
    }

    public function destroy(Lecture $lecture)
    {
        if($lecture) $lecture->delete();

        return response()->json(['success' => 'Lecture deleted successfully']);
    }
}
