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
        $experience = new homeform();
        $experience->email = $request->input('email');
        $experience->activite = $request->input('activite');
        $experience->site = $request->input('site');
        $experience->date = $request->input('date');
        $experience->titre = $request->input('titre');
        $experience->description = $request->input('description');
        $experience->avis = $request->input('avis');
        $experience->reception_email = $request->input('reception_email');
 
        // Enregistrement de la nouvelle instance dans la base de données
        $experience->save();
 
        // Redirection vers une autre page après l'enregistrement
    
        return redirect('/');
    }

    public function create()
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
        $experience = homeform::find($id);
        $experience->email = $request->input('email');
        $experience->activite = $request->input('activite');
        $experience->site = $request->input('site');
        $experience->date = $request->input('date');
        $experience->titre = $request->input('titre');
        $experience->description = $request->input('description');
        $experience->avis = $request->input('avis');
        $experience->reception_email = $request->input('reception_email');

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
        return view('home', ['publishedpost' => $publishedpost]);
        return view('ModerationExperience', ['publishedpost' => $publishedpost]);
    }
}
