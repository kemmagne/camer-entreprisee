<?php

namespace App\Http\Controllers\Agent;
use App\Http\Controllers\Controller;


use App\Controlleur;
use Illuminate\Http\Request;

class ControlleurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $controlleurs = Controlleur::where('user_id', auth()->user()->id)->get();


        return view('agent.controlleur', compact('controlleurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agent.controlleur-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $controlleurs = new Controlleur();

        $controlleurs->user_id = auth()->user()->id;
        $controlleurs->nom = $request->input('nom');
        $controlleurs->cni = $request->input('cni');
        $controlleurs->genre = $request->input('genre');
        $controlleurs->date = $request->input('date');
        $controlleurs->telephone = $request->input('telephone');
        $controlleurs->ville = $request->input('ville');
        $controlleurs->matricule = $request->input('matricule');
        $controlleurs->password = $request->input('password');
        $controlleurs->typeterritoire = $request->input('typeterritoire');
        $controlleurs->nomterritoire = $request->input('nomterritoire');
        $controlleurs->univercontrolle = $request->input('univercontrolle');
        $controlleurs->categoriecontrolle = $request->input('categoriecontrolle');

        $controlleurs->save(); //persist the data

        return redirect()->route('controlleur.home')->with('success','Controlleur créer avec success');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Controlleur  $controlleur
     * @return \Illuminate\Http\Response
     */
    public function show(Controlleur $controlleur, $id)
    {
        $controlleur = Controlleur::find($id);

        return view('agent.controlleur-show', compact('controlleur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Controlleur  $controlleur
     * @return \Illuminate\Http\Response
     */
    public function edit(Controlleur $controlleur, $id)
    {
        $controlleur = Controlleur::find($id);
        return view('agent.controlleur-edit', compact('controlleur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Controlleur  $controlleur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Controlleur $controlleur, $id)
    {
        $controlleur = Controlleur::find($id);


        $controlleur->user_id = auth()->user()->id;
        $controlleur->nom = $request->input('nom');
        $controlleur->cni = $request->input('cni');
        $controlleur->genre = $request->input('genre');
        $controlleur->date = $request->input('date');
        $controlleur->telephone = $request->input('telephone');
        $controlleur->ville = $request->input('ville');
        $controlleur->matricule = $request->input('matricule');
        $controlleur->password = $request->input('password');
        $controlleur->typeterritoire = $request->input('typeterritoire');
        $controlleur->nomterritoire = $request->input('nomterritoire');
        $controlleur->univercontrolle = $request->input('univercontrolle');
        $controlleur->categoriecontrolle = $request->input('categoriecontrolle');

        $controlleur->save(); //persist the data

        return redirect()->route('controlleur.home')->with('Controlleur','Controlleur mise à jour!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Controlleur  $controlleur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Controlleur $controlleur, $id)
    {
        $controlleur = Controlleur::findOrFail($id);
        $controlleur->delete();

        return redirect()->route('controlleur.home')->with('info','Controlleur supprimer avec success!');
    }
}






