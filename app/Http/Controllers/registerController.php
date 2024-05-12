<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function register(Request $request){
        
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|min:8|max:13',
        ]);

        $user = new User;
        $user->fill($request->all());
        $user->save();
        
        return redirect()->route('user.data')->with(['success' => 'User has been registered successfully']);
    }
}
