<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'url' => 'required_if:category,video|nullable',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|in:image,video',
            'image' => 'required_if:category,image|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gallery = new Gallery();

        if ($request->category === 'image' && $request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images/gallery'), $imageName);
            $gallery->url = 'images/gallery/' . $imageName;
        } else {
            $gallery->url = $request->url;
        }

        $gallery->title = $request->title;
        $gallery->description = $request->description;
        $gallery->category = $request->category;
        $gallery->save();

        return redirect()->back()->with('success', 'Gallery item added successfully.');
    }

    public function show(Gallery $gallery)
    {
        return view('dashboard.admin.gallery.show', compact('gallery'));
    }

    public function edit(Gallery $gallery)
    {
        return response()->json($gallery);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'url' => 'required_if:category,video|nullable',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|in:image,video',
            'image' => 'required_if:category,image|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gallery = Gallery::findOrFail($id);

        if ($request->category === 'image' && $request->hasFile('image')) {
            // Delete old image if exists
            if ($gallery->url && file_exists(public_path($gallery->url))) {
                unlink(public_path($gallery->url));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images/gallery'), $imageName);
            $gallery->url = 'images/gallery/' . $imageName;
        } elseif ($request->category === 'video') {
            $gallery->url = $request->url;
        }

        $gallery->title = $request->title;
        $gallery->description = $request->description;
        $gallery->category = $request->category;
        $gallery->save();

        return redirect()->back()->with('success', 'Gallery item updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery) {
            if ($gallery->category == 'image' && $gallery->url) {
                Storage::disk('public')->delete($gallery->url);
            }
            $gallery->delete();
        }

        return response()->json(['success' => 'Gallery deleted successfully']);
    }
}
