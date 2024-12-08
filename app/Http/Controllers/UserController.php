<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use App\Models\EWaste;
use App\Models\CollectionCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // public function navBar()
    // {
    //     $users = User::all();
    //     return view("layout.layout", ["users"=> $users]);
    // }

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

        return redirect()->route('Login.index')->with('success', 'Account created successfully.');

    }

    public function loginUser(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validated)) {
            return redirect()->route('user.home');
        } else {
            return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }
    }

    public function userHome()
    {
        // $Ewastes = EWaste::all();
        // $CollectionCenters = CollectionCenter::all();

        // $datas = [
        //     'ewastes' => $ewastes,
        //     'collectioncenters' => $collectioncenters
        // ];

        return view('userHomePage');
    }

    public function userAbout()
    {
        return view('aboutPage');
    }

    // public function userProfile(User $user)
    // {
    //     $cities = City::all();
    //     return view('profilePage', ['user'=> $user, 'cities' => $cities]);
    // }

    // public function profileUpdate(Request $request, User $user)
    // {
    //     $validated = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users,email',
    //         'address' => 'required|string|max:255',
    //         'city' => 'required',
    //         'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    //     ]);

    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->address = $request->address;
    //     $user->city = $request->city;
    //     $user->photo = $request->photo;
        
    //     if($request->photo){
    //         Storage::disk('public')->delete($user->photo);
    //         $user->photo = $request->photo->store('user', 'public');
    //     }

    //     $user->save();

    //     return back()->with('success', true);
    // }

}
