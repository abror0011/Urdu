<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Amaliyot;
use App\Models\Student;
use App\Models\Images;
use App\User;

class AmaliyotlarController extends Controller
{
    public function index()
    {   
        $amaliyot = Amaliyot::latest()->get();
        return view('admin.amaliyotlar.index',compact('amaliyot'));
    }
}
