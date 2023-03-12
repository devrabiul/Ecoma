<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $all_users = User::all();
        return view('admin.users.index',[
            'all_users'=>$all_users,
        ]);
    }
}
