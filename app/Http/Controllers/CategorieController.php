<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('back.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('back.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
        ]);

        Categorie::create($request->all());

        return redirect()->route('categories.index')
            ->with('success', 'Categorie created successfully.');
    }

    public function edit(Categorie $categorie)
    {
        return view('back.categories.edit', compact('categorie'));
    }

    public function update(Request $request, Categorie $categorie)
    {
        $request->validate([
            'nom' => 'required',
        ]);

        $categorie->update($request->all());

        return Redirect::route('categories.index')
            ->with('success', 'Categorie updated successfully');
    }

    public function show(Categorie $categorie)
    {
        var_dump($categorie['id']);
        return view('back.categories.show', compact('categorie'));
    }

    public function destroy(Categorie $categorie)
    {
        $categorie->delete();

        Session::flash('success', 'Categorie deleted successfully');

        return Redirect::route('categories.index');
    }
}
