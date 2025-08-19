<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEleveRequest;
use App\Http\Requests\UpdateEleveRequest;
use App\Models\Eleve;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves = Eleve::all();
        return view('eleves.index', compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eleves.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEleveRequest $request)
    {
        $request->validate([
            'nom' => 'required|string|max:30',
            'prenom' => 'required|string|max:30',
            'age' => 'required|integer|min:1',
            'etat' => 'nullable|boolean',
        ]);

        Eleve::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'age' => $request->age,
            'etat' => $request->has('etat') ? 1 : 0,
        ]);

        return redirect()->route('eleves.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Eleve $eleve)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eleve $eleve)
    {
        return view('eleves.edit', compact('eleve'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEleveRequest $request, Eleve $eleve)
    {
        $request->validate([
            'nom' => 'required|string|max:30',
            'prenom' => 'required|string|max:30',
            'age' => 'required|integer|min:1',
            'etat' => 'nullable|boolean',
        ]);
        $eleve->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'age' => $request->age,
            'etat' => $request->has('etat') ? 1 : 0,
        ]);

        return redirect()->route('eleves.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eleve $eleve)
    {
        $eleve->delete();
        return redirect()->route('eleves.index');
    }
}
