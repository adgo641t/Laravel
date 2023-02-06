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

        //return redirect()->route('/');
        // $credential = $request->validated();

        // $mail = $request->old('email');
        // $password = $request->old('password');
        
        // $UserDb = User::all();

        // dump($mail,$password);

        //return view('login');

    }

    public function ShowTable(){
        $dataTable = ShowGame::all();
        return view('ShowGame', compact('dataTable'));
    }


}
