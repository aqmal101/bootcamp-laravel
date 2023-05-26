<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Quote;
use Illuminate\Http\Request;

class UserController extends Controller{

    public function getUser () {
        
        $users = User::all();
        return view('about', compact('users'));

    }

    public function getQuote() {

        $quotes = Quote::all();
        return view('home', ['quotes' => $quotes]);

    }



};
 