<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budget;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $budgets = Budget::all();
        return view('budgets.index', compact('budgets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'month' => 'required',
            'year' => 'required',
            'amount' => 'required',
        ]);
        Budget::create($request->all());
        return redirect()->route('budgets.index')
            ->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $budgets = Budget::find($id);
        return view('budgets.show', compact('budgets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'month' => 'required',
            'year' => 'required',
            'amount' => 'required',
        ]);
        $budgets = Budget::find($id);
        $budgets->update($request->all());
        return redirect()->route('budgets.index')
            ->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $budgets = Budget::find($id);
        $budgets->delete();
        return redirect()->route('budgets.index')
            ->with('success', 'Post deleted successfully!');
    }
}
