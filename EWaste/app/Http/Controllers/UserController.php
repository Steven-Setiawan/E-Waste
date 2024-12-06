<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Login(){
        return view('LoginPage');
    }

    public function create(){
        $Cities = City::all();

        return view('RegisterPage',['Cities' => $Cities]);
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'dob' => 'required|date',
            'gender' => 'required|in:male,female',
            'address' => 'required|string|max:255',
            'city' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $photo = $request->file('photo');

        $photoPath = $photo->move(public_path('img/user'), $photo->getClientOriginalName());

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'photo' => 'img/user/' . $photo->getClientOriginalName(),
            'gender' => $request->gender,
            'DOB' => $request->dob,
            'cities_id' => $request->city,
            'address' => $request->address
        ]);

        return redirect()->route('Login.index')->with('success', 'Create New Account Success!');

    }

}
