<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;

use App\Commercial;
use App\User;
use Illuminate\Http\Request;

class CommercialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $commercials = Commercial::where('post_id', auth()->user()->id)->get();

        return view('agent.commercial', compact('commercials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agent.commercial-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        request()->validate([
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       if ($files = $request->file('image')) {
           // Define upload path
           $destinationPath = public_path('/photos/'); // upload path
        // Upload Orginal Image
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);

           $insert['image'] = "$profileImage";
       }


     //  $users = User::find();

        $commercials = new Commercial();

        $commercials->nom = $request->input('nom');
        $commercials->post_id = auth()->user()->id;
        $commercials->cni = $request->input('cni');
        $commercials->genre = $request->input('genre');
        $commercials->date = $request->input('date');
        $commercials->ville = $request->input('ville');
        $commercials->telephone = $request->input('telephone');
        $commercials->matricule = $request->input('matricule');
        $commercials->password = $request->input('password');
        $commercials->typemarche = $request->input('typemarche');
        $commercials->typevente = $request->input('type-vente');
        $commercials->categorieproduit = $request->input('categorie-produit');
        $commercials->nomterritoire = $request->input('nom-territoire');
        $commercials->image = "$profileImage";

        $commercials->save(); //persist the data

        //    $users->commercials()->save($commercials);

      // $commercials->user()->save($commercials);

        return redirect()->route('commercial.home')->with('success','Commercial créer avec success');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Commercial  $commercial
     * @return \Illuminate\Http\Response
     */
    public function show(Commercial $commercial, $id)
    {
        $commercial = Commercial::find($id);

        return view('agent.commercial-show', compact('commercial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Commercial  $commercial
     * @return \Illuminate\Http\Response
     */
    public function edit(Commercial $commercial, $id)
    {
        $commercial = Commercial::find($id);
        return view('agent.commercial-edit', compact('commercial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Commercial  $commercial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commercial $commercial, $id)
    {

        request()->validate([
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       if ($files = $request->file('image')) {
           // Define upload path
           $destinationPath = public_path('/photos/'); // upload path
        // Upload Orginal Image
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);

           $insert['image'] = "$profileImage";
       }


        $commercial = Commercial::find($id);

        $commercial->nom = $request->input('nom');
        $commercial->post_id = auth()->user()->id;
        $commercial->cni = $request->input('cni');
        $commercial->genre = $request->input('genre');
        $commercial->date = $request->input('date');
        $commercial->ville = $request->input('ville');
        $commercial->telephone = $request->input('telephone');
        $commercial->matricule = $request->input('matricule');
        $commercial->password = $request->input('password');
        $commercial->typemarche = $request->input('typemarche');
        $commercial->typevente = $request->input('type-vente');
        $commercial->categorieproduit = $request->input('categorie-produit');
        $commercial->nomterritoire = $request->input('nom-territoire');
        $commercial->image = "$profileImage";

        $commercial->save(); //persist the data

        return redirect()->route('commercial.home')->with('success','Commercial mise à jour!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Commercial  $commercial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commercial $commercial, $id)
    {
        $commercial = Commercial::findOrFail($id);
        $commercial->delete();

        return redirect()->route('commercial.home')->with('info','Commercial supprimer avec success!');
    }
}
