<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::where('role', 'admin')->get();
        //
        $users = User::where('role', 'user')->get();
        return view('back.users.index', compact('users','admins'));
    }

       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('back.users.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        
            'role' => 'required',
        ]);
        $data = $request->all();
        $data['password'] = "$2y$10$40r6m9fPSXXSKHDeLUu0fuqtwRyS2.7QZQmjMsCLlPo.h7Ik2cpsm";
        User::create($data);

        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
        var_dump($user['id']);
        return view('back.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('back.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            
            'role' => 'required',
        ]);

        $user->update($request->all());

        return Redirect::route('users.index')
            ->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();

        Session::flash('success', 'User deleted successfully');

        return Redirect::route('users.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function contacts(User $user)
    {
     
        return view('back.users.contacts', compact('user'));
    }
}