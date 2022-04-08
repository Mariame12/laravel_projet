<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adherent;
class AdherentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $a = Adherent::all();
        return view('adherent.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $a = Adherent::all();
        return view('adherent.create',compact('a'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nom'=>'regex:/^[a-zA-Z ]+$/',
            'prenom' => 'regex:/^[a-zA-Z ]+$/',
            'date_naissance'=> 'required',
            'sexe' => 'required',
            'cotisation_mensuel'=> 'required',
            
        ]);
        
        $a = new Adherent;
         $a->nom = $request->nom;
         $a->prenom = $request->prenom;
         $a->date_naissance = $request->date_naissance;
         $a->sexe = $request->sexe;
         $a->cotisation_mensuel = $request->cotisation_mensuel;
        $a->save();
    return redirect()->route('adherent.create')->with('success','Adherent enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       

        // show the view and pass the shark to it
        
    }

    public function search()
    {
        //
         $search_text = $_GET['query'];
        $a = Adherent::where('nom','LIKE', '%'.$search_text.'%')->get();

        return view('adherent.search',compact('a'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $a = Adherent::FindOrFail($id);
        return view('adherent.edit', compact(['a']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'nom'=> 'regex:/^[a-zA-Z ]+$/',
            'prenom' => 'regex:/^[a-zA-Z ]+$/',
            'date_naissance'=> 'required',
            'sexe' => 'required',
            'cotisation_mensuel'=> 'required',
        ]);
        $a = Adherent::FindOrfail($id);
         $a->nom = $request->nom;
         $a->prenom = $request->prenom;
         $a->date_naissance = $request->date_naissance;
         $a->sexe = $request->sexe;
         $a->cotisation_mensuel = $request->cotisation_mensuel;
        $a->save();
        return redirect (route('adherent.index', $a->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $a = Adherent::findOrFail($id);
        $a->delete();

        return redirect (route('adherent.index', $a->id));
    }
}

