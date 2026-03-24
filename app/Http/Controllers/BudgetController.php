<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;


class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $budgets = Budget::where('user_id', auth()->id())
                     ->latest()
                     ->paginate(10); 

    return view('budgets.index', compact('budgets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'month' => 'required',
            'year' => 'required',
            'amount' => 'required',
        ]);

        $validated['user_id'] = auth()->id();

        Budget::create($validated);
        return redirect()->route('budgets.index')
            ->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $budgets = Budget::find($id);
        return view('budgets.show', compact('budgets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Budget $budget)
    {
        $validated = $request->validate([
            'month' => 'required|integer',
            'year' => 'required|integer',
            'amount' => 'required|numeric',
        ]);
        $budget->update($validated);
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

    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('budgets.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Budget $budget)
    {
        return view('budgets.edit', compact('budget'));
    }
}
