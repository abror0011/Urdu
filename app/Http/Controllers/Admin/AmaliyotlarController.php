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

    public function rayting(Request $request,$id)
    {
        // dd($request);
        // dd($rayting);
        $rayting = Amaliyot::findOrFail($id);
        
        $request->validate([
            'rayting' => 'required'
        ]);
        $data = [
            'rayting' => $request->post('rayting'),
        ];
        dd($data);
        $rayting->update($data);
        return redirect()->route('admin.amaliyotlar');
    }
    public function batafsil($id)
    {
        $batafsil = Amaliyot::findOrFail($id);
        return view('admin.amaliyotlar.batafsil',compact('batafsil'));
    }
}
