<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {

        $users = User::all();
        $all_users = User::count();

        return view('admin.users.index')
            ->with('users', $users)
            ->with('all_users', $all_users);
    }
}
