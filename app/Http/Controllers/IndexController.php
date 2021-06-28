<?php

namespace App\Http\Controllers;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;
use App\Models\Course;
use App\Models\Feedback;
use App\Models\Pricing;
use App\Models\Workshop;
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
    public function member(){
        $members = Member::all();
        $courses = Course::all();
        $feedbacks = Feedback::all();
        $pricings = Pricing::all();
        $workshops = Workshop::all();
        return view('index')->with(compact('members','courses','feedbacks','pricings','workshops'));
    }
}
