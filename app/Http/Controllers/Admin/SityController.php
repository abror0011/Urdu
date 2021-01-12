<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Amaliyot;
use App\Models\Student;

class SityController extends Controller
{
    //
    public function home(){
        $amaliyot = Student::all()->sortByDesc('allRating');
        return view('admin.home',compact('amaliyot'));
    }
    
}
