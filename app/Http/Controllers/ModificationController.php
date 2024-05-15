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
    $editexperience = Homeform::find($id);
    return view('editExperience', compact('editexperience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $experience = Homeform::find($id);
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
