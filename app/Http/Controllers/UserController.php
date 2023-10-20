<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    //
    public function index() {
        $users = User::all();
        

        //$students = Kategori::paginate(3);
        return view('index', ['users' => $users,]);
    }

    public function show($id) {
        $user = User::find($id);
        return view('show', ['user' => $user]);
    }



}