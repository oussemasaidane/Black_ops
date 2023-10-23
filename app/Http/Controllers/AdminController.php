<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\SousCategorie;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AdminController extends Controller
{

    /**
     * Show the application dashboard.

     */
    public function back()
    {
        if (Gate::denies('viewAdmin', Auth::user())) {
            return redirect('/')->with('error', "Vous n\'avez pas l'autorisation d'accéder à la partie admin.");
        }

        /* if (auth()->user() && auth()->user()->role != 'admin') {
            return redirect('/')->with('error', "Vous n\'avez pas l'autorisation d'accéder à la partie admin."); 
        }*/

        $contacts = Contact::all();
        $today = Carbon::today();
        $todayContacts = Contact::whereDate('created_at', $today)->get();
        
        return view('back.dashboard',compact('contacts','todayContacts'));
    }

    public function front()
    {
        $categories = Categorie::all();
        $sousCategories = SousCategorie::all();
        
        return view('front.form', compact('categories', 'sousCategories'));
    }
}
