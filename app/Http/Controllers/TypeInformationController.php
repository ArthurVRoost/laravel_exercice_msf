<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTypeInformationRequest;
use App\Http\Requests\UpdateTypeInformationRequest;
use App\Models\TypeInformation;

class TypeInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeformations = TypeInformation::all();
        return view('type_informations.index', compact('typeformations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type_informations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeInformationRequest $request)
    {
        $request->validate([
        'nom' => 'required|string|max:30',
    ]);

    TypeInformation::create([
        'nom' => $request->nom,
    ]);

    return redirect()->route('type_informations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeInformation $typeInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeInformation $typeInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeInformationRequest $request, TypeInformation $typeInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeInformation $typeInformation)
    {
        //
    }
}
