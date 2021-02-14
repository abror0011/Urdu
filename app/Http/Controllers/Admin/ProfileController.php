<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\PasswordRequest;
use App\User;
use Auth;
use Image;
use Illuminate\Support\Facades\Storage;
class ProfileController extends Controller
{
    public function profile()
    {   
        $user = Auth::user();
        return view('admin.profile',compact('user'));
    }
    
    public function profile_update(Request $request){
        // return $request;
       $id=Auth::user()->id;
       $id=User::findOrFail($id);
       
    //    dd($id);
       $data = $request;
        if($request->file('img')){
            $request->validate([
                'name'=>'required|min:3',
                'last_name'=>'required|min:3',
                'phone'=>'required|digits:9',
                'img' =>'required|mimes:jpg,jpeg,png|max:2048',
                
            ]);

            if($id->avatar!="" && $id->thumbs!=""){
                unlink(storage_path('app/public/'.$id->thumbs));
                unlink(storage_path('app/public/'.$id->avatar));

            }
            $image_name =$request->file('img')->store('avatar',['disk'=>'public']);
            $full_path = storage_path('app/public/'.$image_name);
            $full_path_thumb = storage_path('app/public/thumbs/'.$image_name);
            //Make directory for avatar
            Storage::disk('public')->makeDirectory('thumbs/avatar');

            $thumbs = Image::make($request->file('img'));
            $thumbs->fit(400, 400, function($constraint) {
                $constraint->aspectRatio();
            })->save($full_path_thumb);
            $thumb_name='thumbs/'.$image_name;
           
        } else{
            $request->validate([
                'phone'=>'required|digits:9',
                'name'=>'required|min:3',
                'last_name'=>'required|min:3',
            
            ]);
            $image_name=$id->avatar;
            $thumb_name=$id->thumbs;
        //   dd($image_name);
        }
        // return $request;
        // exit;
        //  dd($request->post('phone'));
         $id->update([
            'phone'=> $request->post('phone'),
            'avatar'=>$image_name,
            'thumbs'=>$thumb_name,
         ]);
         $id->student()->update([
            'first_name'=> $request->post('name'),
            'last_name'=> $request->post('last_name'),
         ]);

        // return back()->with('success','Profile o\'zgartirildi!');
        return redirect()->route('admin.profile')->with('success','Profile o\'zgartirildi!');

    }

    public function profile_password(PasswordRequest $request){

        $password = auth()->user()->id;
        $password=User::findOrFail($password);
        $password->update([
            'password'=> bcrypt($request['password'])
        ]);
        // return back()->with('success','Password o\'zgartirildi!');
        return redirect()->route('admin.profile')->with('success','Password o\'zgartirildi!');

    }


    public function adminProfile(){
        $user = Auth::user();
        return view('admin.adminProfile',compact('user'));
    }
    public function adminProfileUpdate(Request $request){
        $id=Auth::user()->id;
        $id=User::findOrFail($id);
     //    dd($id);
        $data = $request;
         if($request->file('img')){
             $request->validate([
                 'phone'=>'required|digits:9',
                 'img' =>'required|mimes:jpg,jpeg,png|max:2048',
                 
             ]);
 
             if($id->avatar!="" && $id->thumbs!=""){
                 unlink(storage_path('app/public/'.$id->thumbs));
                 unlink(storage_path('app/public/'.$id->avatar));
 
             }
             $image_name =$request->file('img')->store('avatar',['disk'=>'public']);
             $full_path = storage_path('app/public/'.$image_name);
             $full_path_thumb = storage_path('app/public/thumbs/'.$image_name);
             //Make directory for avatar
             Storage::disk('public')->makeDirectory('thumbs/avatar');
 
             $thumbs = Image::make($request->file('img'));
             $thumbs->fit(400, 400, function($constraint) {
                 $constraint->aspectRatio();
             })->save($full_path_thumb);
             $thumb_name='thumbs/'.$image_name;
            
         } else{
             $request->validate([
                 'phone'=>'required|digits:9',
                 
             
             ]);
             $image_name=$id->avatar;
             $thumb_name=$id->thumbs;
         //   dd($image_name);
         }
         // return $request;
         // exit;
         //  dd($request->post('phone'));
          $id->update([
             'phone'=> $request->post('phone'),
             'avatar'=>$image_name,
             'thumbs'=>$thumb_name,
          ]);
          
         // return back()->with('success','Profile o\'zgartirildi!');
         return redirect()->route('admin.adminProfile')->with('success','Profile o\'zgartirildi!');
 
    }



    public function admin_password(PasswordRequest $request){

        $password = auth()->user()->id;
        $password=User::findOrFail($password);
        $password->update([
            'password'=> bcrypt($request['password'])
        ]);
        // return back()->with('success','Password o\'zgartirildi!');
        return redirect()->route('admin.adminProfile')->with('success','Password o\'zgartirildi!');

    }

}
