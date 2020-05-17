<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Form;
use App\User;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Form::all();

          return view('admin.users', ['forms'=>$forms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'logo' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       if ($files = $request->file('logo')) {
           // Define upload path
           $destinationPath = public_path('/images/'); // upload path
        // Upload Orginal Image
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);

           $insert['logo'] = "$profileImage";
       }

            $user = User::find(1);
           $forms = new Form();
          // $forms->user_id = auth()->user()->id;
           $forms->name = $request->input('name');
           $forms->nui = $request->input('nui');
           $forms->rccm = $request->input('rccm');
           $forms->localisation = $request->input('localisation');
           $forms->contact = $request->input('contact');
           $forms->acontact = $request->input('acontact');
           $forms->date = $request->input('date');


           $forms->logo = "$profileImage";

      //  $request->input('logo');

         $forms->save(); //persist the data

//         $user->forms()->save($forms);

     return redirect()->route('admin.users')->with('success','Admin créer avec success');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form = Form::findOrFail($id);
        $form->delete();

        return redirect('admin/users/')->with('success','Admin supprimer avec success');

    }
}
