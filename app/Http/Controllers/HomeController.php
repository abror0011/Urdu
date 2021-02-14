<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Amaliyot;
use App\Models\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $amaliyot = Student::all()->sortByDesc('allRating');
        $amaliyot = Amaliyot::paginate(6);
        return view('admin.home',compact('amaliyot', 'amaliyot'));
    }
}
