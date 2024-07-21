<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Finance;
use Illuminate\Http\Request;

class FinanceManagementController extends Controller
{
    public function index()
    {
        $finances = Finance::all();
        return view('dashboard.admin.finance.index', compact('finances'));
    }

    public function create()
    {
        return view('dashboard.admin.finance.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'bulan' => 'required|string',
            'minggu' => 'required|string',
            'operasional' => 'required|integer',
            'yatim' => 'required|integer',
            'dhuafa' => 'required|integer',
            'jumat' => 'required|integer',
        ]);

        Finance::create($request->all());
        return redirect()->route('dashboard.admin.finance.index')->with('success', 'Finance record created successfully.');
    }

    public function show(Finance $finance)
    {
        return view('dashboard.admin.finance.show', compact('finance'));
    }

    public function edit(Finance $finance)
    {
        return response()->json($finance);

        // return view('dashboard.admin.finance.edit', compact('finance'));
    }

    public function update(Request $request, Finance $finance)
    {
        $request->validate([
            'bulan' => 'required|string',
            'minggu' => 'required|string',
            'operasional' => 'required|integer',
            'yatim' => 'required|integer',
            'dhuafa' => 'required|integer',
            'jumat' => 'required|integer',
        ]);

        $finance->update($request->all());
        return redirect()->route('dashboard.admin.finance.index')->with('success', 'Finance record updated successfully.');
    }

    public function destroy(Finance $finance)
    {
        if($finance) $finance->delete();

        return response()->json(['success' => 'Finance deleted successfully']);
    }
}
