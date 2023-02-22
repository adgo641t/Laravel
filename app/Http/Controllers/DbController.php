<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;




class DbController extends Controller
{
    
    public function index(){
    //dump($GameCreators);
    }

    public function login(Request $request){
     
        $credential = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended(route('welcome'));
        } else {
            return'Loggin failed';
        };


    }

    public function RegisterUser(Request $request){

        $request->validate([
            'name' => ['required','string','max:50'],
            'password' => ['required','string','max:50'],
            'email' => ['required','email','max:120']
        ]);
        
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'user';

        $user->save();

        Auth::login($user);

        return redirect()->intended(route('welcome'));
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('welcome')->withSuccess('Logged out');
    }


    public function EditUser($user){
        $user = User::findOrFail($user);
        return view('EditUser', compact('user'));

    }

    public function update(Request $request,$user){
        $user = User::findOrFail($user);
        $user->update($request->all());
        $user->save();


        return redirect()->route('welcome');

    }

    public function Delete($user){
        $user = User::findOrFail($user);
        $user->delete();

        return redirect()->route('welcome');

    }


}
