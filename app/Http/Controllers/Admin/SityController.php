<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class SityController extends Controller
{
    //
    public function home(){
        return view('admin.home');
    }
}
