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
        $amaliyot = Amaliyot::latest()->where('rayting',0)->paginate(9);
        return view('admin.amaliyotlar.index',compact('amaliyot'));
    }

    public function amaliyotlar()
    {
        $amaliyot = Amaliyot::latest()->whereBetween('rayting',[1,5])->paginate(9);
        return view('admin.amaliyotlar.barchaAmaliyotlar',compact('amaliyot'));
    }

    public function rayting(Request $request,$id)
    {
    
        $rayting = Amaliyot::findOrFail($id);
        $request->validate([
            'rating' => 'required'
        ]);
        
        $allRating = $rayting->student->allRating + $request->post('rating');    
        $rayting->update([
            'rayting' => $request->post('rating'),
        ]);
        $rayting->student->update(['allRating' => $allRating ]);
        
        return redirect()->route('admin.yangiAmaliyotlar')->with('success','Amaliyot baholandi!');
    }
    public function batafsil($id)
    {
        $batafsil = Amaliyot::findOrFail($id);
        return view('admin.amaliyotlar.batafsil',compact('batafsil'));
    }
}
