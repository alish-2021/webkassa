<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function userIndex(){

        $users = User::all();

        return view('admin.user', [
            'users' => $users,
        ]);
        
    }

    public function userCreate(){
        return view('auth.register');
    }
 
}
