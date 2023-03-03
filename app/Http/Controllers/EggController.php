<?php

namespace App\Http\Controllers;

use App\Models\Egg;
use Illuminate\Http\Request;

class EggController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eggs = Egg::all();

        return view('index', compact('eggs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eggs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $egg = new Egg();
        $egg->fill($data);
        $egg->save();
        return to_route('eggs.show', $egg->id);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $eggs = Egg::findOrFail($id);
        return view('eggs.show', compact('eggs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $eggs = Egg::findOrFail($id);
        return view('eggs.edit', compact('eggs'));
        // dd($comics);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $eggs = Egg::findOrFail($id);
        $eggs->fill($data);
        $eggs->save();

        return to_route('eggs.show', $eggs->id);
    }

    /**
     * Remove the specified resource in storage.
     */
    public function destroy(string $id)
    {

        $eggs = Egg::findOrFail($id);
        $eggs->delete();

        return to_route('index');
    }
}
