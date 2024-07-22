<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryManagementController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('dashboard.admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('dashboard.admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'category' => 'required|in:image,video',
        ]);

        Gallery::create($request->all());
        return redirect()->route('dashboard.admin.gallery.index')->with('success', 'Gallery record created successfully.');
    }

    public function show(Gallery $gallery)
    {
        return view('dashboard.admin.gallery.show', compact('gallery'));
    }

    public function edit(Gallery $gallery)
    {
        return response()->json($gallery);
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'url' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'category' => 'required|in:image,video',
        ]);

        $gallery->update($request->all());
        return redirect()->route('dashboard.admin.gallery.index')->with('success', 'Gallery record updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery) $gallery->delete();

        return response()->json(['success' => 'Gallery deleted successfully']);
    }
}
