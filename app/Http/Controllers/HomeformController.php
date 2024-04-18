<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homeform;

class HomeformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required',
            'activite' => 'required',
            'site' => 'required',
            'date' => 'required',
            'titre' => 'required',
            'description' => 'required',
            'avis' => 'required',
            'reception_email' => 'required',
        ]);
    
        Homeform::create($validatedData);
    
        return redirect('/')->with('success', 'Form submitted successfully!');
    }

    public function create()
{
    return view('experience', [
        'avis_options' => [
            'peu_satisfait' => 'Peu satisfait',
            'pas_satisfait' => 'Pas satisfait',
            'moyennement_satisfait' => 'Moyennement satisfait',
            'satisfait' => 'Satisfait',
            'tres_satisfait' => 'Très satisfait',
        ],
    ]);
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
