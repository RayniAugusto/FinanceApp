<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MoneyOut;
use Illuminate\Http\Request;

class MoneyOutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moneyouts = MoneyOut::all();
        return view('moneyouts.index', compact('moneyouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('moneyouts.create', compact('categories'));
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
        $moneyOutData = $request->all();
        $moneyOutData['user_id'] = auth()->user()->id;

        MoneyOut::create($moneyOutData);

        return redirect()->route('moneyouts.index')
                         ->with('success', 'Ingreso successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('moneyouts.show', compact('moneyout'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MoneyOut $moneyout)
    {
        $categories = Category::all();
        return view('moneyouts.edit', compact('moneyout','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Moneyout $moneyout)
    {
        $request->validate([
            'description' => 'required',
            'amount' =>'required|numeric',
            'category_id' => 'required'
        ]);

        $moneyout->update($request->all());

        return redirect()->route('moneyouts.index')
                         ->with('success', 'Money updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MoneyOut $moneyout)
    {
        $moneyout->delete();

        return redirect()->route('moneyouts.index')
                         ->with('success', 'Money deleted successfully');
    }
}
