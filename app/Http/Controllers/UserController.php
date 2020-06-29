<?php

namespace App\Http\Controllers;

use Hash;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __contruct() {
        $this->middleware('auth');
    }


    public function index() {
        $users = User::all();

        return view('home', compact('users'));
    }

    public function create() {
        return view('partials.form');
    }

    public function store() {

        request()->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone' => 'required|numeric'
        ]);
        
        $admin_flag = (request('admin') == null) ? False : True;

        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'admin' => $admin_flag,
            'address' => request('address'),
            'phone' => request('phone'),
            'password' => Hash::make(request('password')),
        ]);

        return redirect()->route('home');
    }

    public function show(User $user) {
        return view('show', [
            'user' => $user
        ]);
    }

    public function edit(User $user) {
        return view('edit', [
            'user' => $user
        ]);
    }

    public function update(User $user) {
        request()->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric'
        ]);

        $admin_flag = (request('admin') == null) ? False : True;
        
        $user->update([
            'name' => request('name'),
            'email' => request('email'),
            'admin' => $admin_flag,
            'address' => request('address'),
            'phone' => request('phone'),
        ]);

        return redirect()->route('user.show', $user);
    }

    public function destroy(User $user) {
        $user->delete();

        return redirect()->route('home');
    }
}
