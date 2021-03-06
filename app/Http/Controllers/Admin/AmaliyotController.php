<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AmaliyotRequest;
use App\Models\Amaliyot;
use App\Models\Student;
use App\User;
use App\Models\Images;
use Auth;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;



class AmaliyotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = Auth::user()->student->id;
        $amaliyot = Amaliyot::latest()->paginate(10);
        return view('admin.amaliyot.index',compact('user','amaliyot'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.amaliyot.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AmaliyotRequest $request)
    {
        
        $user = Auth::user()->student->id;
        // dd($user);
       
        $data = $request;
        $amaliyot = [
            'student_id' => $user,
            'title' => $request->post('title'),
            
            
        ];
        $amaliyot_data = Amaliyot::create($amaliyot);
        
        $image_name = $data->file('image')->store('amaliyot',['disk' => 'public']);
        $full_path = storage_path('app/public/'.$image_name);
        $full_thumb_path = storage_path('app/public/thumbs/'.$image_name);

        $thumb = Image::make($full_path);
        $thumb->fit(350, 350, function($constraint){
            $constraint->aspectRatio();
        })->save($full_thumb_path);
        $image_data = [
            'image' => $image_name,
            'thumb' => 'thumbs/'.$image_name,
                
        ];
        $amaliyot_data->images()->create($image_data);
        
        
        return redirect()->route('admin.amaliyot.index')->with(['success' => 'Amaliyot yaratildi']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Amaliyot::findOrFail($id);
        return view('admin.amaliyot.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $amaliyot = Amaliyot::findOrFail($id);
        return view('admin.amaliyot.edit',compact('amaliyot'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $amaliyot = Amaliyot::findOrFail($id);
        $request->validate([
            'title' => 'required'
        ]);

        if($request->file('image')){
            Storage::disk('public')->delete([
                $amaliyot->images->image,
                $amaliyot->images->thumb
            ]);
            $image_name = $request->file('image')->store('amaliyot',['disk' => 'public']);
            $thumb_name = 'thumbs/'.$image_name;
            $full_path = storage_path('app/public/'.$image_name);
            $full_thumb_path = storage_path('app/public/'.$thumb_name);
    
            $thumb = Image::make($full_path);
            $thumb->fit(350, 350, function($constraint){
                $constraint->aspectRatio();
            })->save($full_thumb_path);
    
        }
        else{
            $image_name = $amaliyot->images->image;
            $thumb_name = $amaliyot->images->thumb;
        }
        $amaliyot->images->update([
            'image' => $image_name,
            'thumb' => $thumb_name,
        ]);
        $amaliyot->update([
            'title' => $request->post('title'),
        ]);
        return redirect()->route('admin.amaliyot.index')->with(['success'=> 'Yangilandi']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $amaliyot = Amaliyot::findOrFail($id);
        $amaliyot->delete();
        // Storage::disk('public')->delete([
        //     $amaliyot->images->image,
        //     $amaliyot->images->thumb
        // ]);
        return redirect()->route('admin.amaliyot.index')->with(['delete' => 'Amaliyot o`chirildi']);
    }
}
