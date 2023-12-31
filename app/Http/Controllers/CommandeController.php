<?php

namespace App\Http\Controllers;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandes = Commande::all();
        return view('back.commande.index', compact('commandes'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.commande.create');
        //
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
        $request->validate([
            'total' => 'required',
        ]);

        Commande::create($request->all());

        return redirect()->route('commande.index')
            ->with('success', 'Commande created successfully.');
    }

    public function show(Commande $commande)
    {
        var_dump($commande['id']);
        return view('back.commande.show', compact('commande'));
    }


    public function edit(Commande $commande)
    
    {
        return view('back.commande.edit', compact('commande'));
        //
    }

 
    public function update(Request $request, Commande $commande)
    {
        $request->validate([
            'total' => 'required',
        ]);

        $commande->update($request->all());

        return Redirect::route('commande.index')
            ->with('success', 'Commande updated successfully');
    }

  
    public function destroy(Commande $commande)
    {
        $commande->delete();

        Session::flash('success', 'Commande deleted successfully');

        return Redirect::route('commande.index');
    }
}
