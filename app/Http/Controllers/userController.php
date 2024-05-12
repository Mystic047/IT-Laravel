<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class userController extends Controller
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

    public function showData(){
        $users = User::all();

        return view('userData' , compact('users'));
    }

     public function destroy($id){
        $user = User::find($id)->delete();
        return back()->with(['success' => 'User has been delete!']);
     }

     public function showEdit($id){
        $users = User::find($id);
        return view('update', compact('users'));
     }

     public function update(Request $request, $id){

        $request->validate([
            'name' =>'required|string',
            'email' =>'required|string',
        ]);

        $user = User::find($id);
        $user->fill($request->except('password'));
        // $user->fill($request->all());
        $user->save();

        return redirect()->route('user.data')->with(['success' => 'User has been updated']);
     }


}
