<?php

namespace App\Http\Controllers;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(){
        $role=Auth::user()->role;

        if($role=='1')
        {
            return view('author.author');
        }
        else{
            return view('dashboard');
        }

    }
}
