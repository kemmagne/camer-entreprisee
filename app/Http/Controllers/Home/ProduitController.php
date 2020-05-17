<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;


use App\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::where('user_id', auth()->user()->id)->get();



        return view('home.produit', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.produit-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produits = new Produit();

        $produits->nom = $request->input('nom');
        $produits->user_id = auth()->user()->id;

        $produits->prix = $request->input('prix');
        $produits->description = $request->input('description');
        $produits->save(); //persist the data

        return redirect()->route('produit.home')->with('Produit','Marché créer avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit, $id)
    {
        $produit = Produit::find($id);

        return view('home.produit-show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit, $id)
    {
        $produit = Produit::find($id);
        return view('home.produit-edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit, $id)
    {
        $produit = Produit::find($id);

        $produit->nom = $request->input('nom');
        $produit->user_id = auth()->user()->id;
        $produit->prix = $request->input('prix');
        $produit->description = $request->input('description');
        $produit->save();

        return redirect()->route('produit.home')->with('success','Produit mise à jour!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit, $id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();

        return redirect()->route('produit.home')->with('info','Produit supprimer avec success!');
    }

    public function promotion(Produit $produit, $id)
    {
        return view('home.produit-promotion');
    }

}
