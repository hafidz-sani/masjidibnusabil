<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonManagementController extends Controller
{
    public function index()
    {
        $persons = Person::all();
        return view('dashboard.admin.person.index', compact('persons'));
    }

    public function create()
    {
        return view('dashboard.admin.person.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'panggilan' => 'required|string',
            'alamat' => 'required|string',
            'status' => 'required|string',
        ]);

        Person::create($request->all());
        return redirect()->route('dashboard.admin.person.index')->with('success', 'Person record created successfully.');
    }

    public function show(Person $person)
    {
        return view('dashboard.admin.person.show', compact('person'));
    }

    public function edit(Person $person)
    {
        return response()->json($person);
    }

    public function update(Request $request, Person $person)
    {
        $request->validate([
            'nama' => 'required|string',
            'panggilan' => 'required|string',
            'alamat' => 'required|string',
            'status' => 'required|string',
        ]);

        $person->update($request->all());
        return redirect()->route('dashboard.admin.person.index')->with('success', 'Person record updated successfully.');
    }

    public function destroy(Person $person)
    {
        if($person) $person->delete();

        return response()->json(['success' => 'Person deleted successfully']);
    }
}
