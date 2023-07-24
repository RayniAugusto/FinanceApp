<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MoneyIn;
use Illuminate\Http\Request;

class MoneyInController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moneyins = MoneyIn::all();
        return view('moneyins.index', compact('moneyins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('moneyins.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'amount' =>'required|numeric',
            'category_id' => 'required'

        ]);
        $moneyInData = $request->all();
        $moneyInData['user_id'] = auth()->user()->id;

        MoneyIn::create($moneyInData);

        return redirect()->route('moneyins.index')
                         ->with('success', 'Ingreso successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('moneyins.show', compact('moneyin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MoneyIn $moneyin)
    {
        $categories = Category::all();
        return view('moneyins.edit', compact('moneyin','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Moneyin $moneyin)
    {
        $request->validate([
            'description' => 'required',
            'amount' =>'required|numeric',
            'category_id' => 'required'
        ]);

        $moneyin->update($request->all());

        return redirect()->route('moneyins.index')
                         ->with('success', 'Money updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MoneyIn $moneyin)
    {
        $moneyin->delete();

        return redirect()->route('moneyins.index')
                         ->with('success', 'Money deleted successfully');
    }
}
