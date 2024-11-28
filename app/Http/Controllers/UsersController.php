<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

  
    public function create()
    {
        return view('users.create');
    }

   
    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'role' => 'required|in:nomad,company,admin',
            'profile_picture' => 'nullable|image|max:1024',
        ]);

        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);

       
        if ($request->hasFile('profile_picture')) {
            $user->profile_picture = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

       
        $user->save();

      
        return redirect()->route('users.index')->with('success', 'Usuário cadastrado com sucesso!');
    }
}
