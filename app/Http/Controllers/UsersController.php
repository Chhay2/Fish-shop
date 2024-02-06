<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    // public function Users(Request $request){
    //     $users = new User();
    //     $users->name = $request->name;
    //     $users->email = $request->email;
    //     $users->password = $request->password;
    //     $users->confirm_password = $request->confirm_password;
    //     $users->save();

    //     return response()->json(['u'=>$users]);
    // }


    public function storeUsers(Request $request)
{
    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);
    $user->save();
    // $request->validate([
    //     'name' => 'required|string',
    //     'email' => 'required|email|unique:users,email',
    //     'password' => 'required|min:6|confirmed',
    // ]);

    // $user = User::create([
    //     'name' => $request->name,
    //     'email' => $request->email,
    //     'password' => bcrypt($request->password),
    // ]);

    return response()->json(['message' => 'User created successfully', 'user' => $user]);
}

}
