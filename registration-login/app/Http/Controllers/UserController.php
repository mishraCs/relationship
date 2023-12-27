<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::whereNotNull('last_login_at')->get();
        $users = User::whereNotNull('id')->get();

        return view('home', ['users' => $users]);
    }
}
