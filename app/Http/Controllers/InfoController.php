<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class InfoController extends Controller
{
    public function getInfo(){

        $users = User::all();

        return view('test', ['users' => $users]);

    }
}
