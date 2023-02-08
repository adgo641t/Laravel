<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\ShowGame;
use App\Models\User;
use App\Http\Requests\LoginRequest;




class PostController extends Controller
{
    
    public function index(){
    //dump($GameCreators);
    $GameCreators = [
        [
            "Name" => 'Gerard',
            "Description" => 'Game developer'
        ]
    ];

     $WebDevelopers = [
        [
        'Name'=>'Adrian Gomez',
        'Description' => 'Web developer',
        ],
        [
            'Name'=>'Pau Saigner',
            'Description' => 'Web developer',
        ],
    ];
       return view('welcome', compact('GameCreators', 'WebDevelopers'));
    }

    public function login(Request $request){
     
        $credential = $request->only('email', 'password');


        if(Auth::attempt($credential)){
            return redirect('welcome')->withSuccess('Signed in');
        } else {
            return'Loggin failed';
        };


    }

    public function RegisterUser(Request $request){
        if(User::create($request->only('name','email','password')))
        {
            return redirect()->route('welcome')->withSuccess('Registered');
        } else {
            return 'User already exists';
        };
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('welcome')->withSuccess('Logged out');
    }

    public function ShowTable(){
        $dataTable = ShowGame::all();
        return view('ShowGame', compact('dataTable'));
    }

    public function ShowUsers(){
        $users = User::all();
        return view('UserTable', compact('users'));
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
