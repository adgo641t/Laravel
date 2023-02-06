<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShowGame;
use App\Models\User;
use App\Http\Requests\LoginRequest;



class PostController extends Controller
{
    public function index(){

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
    //dump($GameCreators);
       return view('welcome', compact('GameCreators', 'WebDevelopers'));
    }

    public function login(LoginRequest $request){
        $credential = $request->validated();

        $mail = $request->old('email');
        $password = $request->old('password');
        
        $UserDb = User::all();

        dump($mail,$password);

        //return view('login');

    }

    public function ShowTable(){
        $dataTable = ShowGame::all();
        return view('ShowGame', compact('dataTable'));
    }


}
