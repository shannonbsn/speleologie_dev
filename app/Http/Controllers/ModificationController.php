<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homeform;
use App\Models\ModificationExperience;

class ModificationController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    
    {
        return view('experience', [
        'avis_options' => [
            'peu_satisfait' => 'Pas satisfait',
            'pas_satisfait' => 'Peu satisfait',
            'moyennement_satisfait' => 'Moyennement satisfait',
            'satisfait' => 'Satisfait',
            'tres_satisfait' => 'Très satisfait',
        ],
    ]);
    $editexperience = Homeform::find($id);
    return view('editExperience', compact('editexperience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $experience = Homeform::find($id);
    $experience->email = $request->input('email');
    $experience->date = $request->input('date');
    $experience->activite = $request->input('activite');
    $experience->site = $request->input('site');
    $experience->titre = $request->input('titre');
    $experience->description = $request->input('description');
    $experience->reception_email = $request->input('reception_email');
    $experience->avis = $request->input('avis');
    $experience->valide = $request->input('valide') == 'true';

    $experience->save();

    return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showConsultationExperience()
    {
        $publishedpost = Homeform::all();
        return view('ModerationExperience', ['publishedpost' => $publishedpost]);
    }
}
