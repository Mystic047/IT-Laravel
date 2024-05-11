<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function showData(){
        $users = User::all();

        return view('userData' , compact('users'));
    }

     public function destroy($id){
        $user = User::find($id)->delete();
        return back()->with(['success' => 'User has been delete!']);
     }
}
