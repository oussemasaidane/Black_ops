<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon;
class AdminController extends Controller
{

    /**
     * Show the application dashboard.

     */
    public function back()
    {
        $contacts = Contact::all();
        $today = Carbon::today();
        $todayContacts = Contact::whereDate('created_at', $today)->get();

        return view('back.dashboard', compact('contacts','todayContacts'));
    }

    public function front()
    {
        return view('front.form');
    }
}
