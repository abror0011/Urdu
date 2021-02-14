<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostsRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use Image;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsRequest $request)
    {

        $img_name = $request->file('image')->store('posts', ['disk' => 'public']);
        $full_path = storage_path('app/public/'.$img_name);
        $full_thumb_path = storage_path('app/public/thumbs/'.$img_name);

        $thumb = Image::make($full_path);
        $thumb -> fit(750,375,function($constraint){
            $constraint->aspectRatio();
        })->save($full_thumb_path);
        
        $post = [
            'image' => $img_name,
            'thumb' => 'thumbs/'.$img_name,
            'title'=> $request->post('title'),
            'content' => $request->post('content'),
        ];
        Post::create($post);
        return redirect()->route('admin.posts.index')->with('success','Yangilik yaratildi!');



       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $post = Post::findOrFail($id);
       return view('admin.posts.edit',compact('post'));
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
        $post = Post::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'content'=>'required',      
        ]);
        if($request->file('image')){
            Storage::disk('public')->delete([
                $post->image,
                $post->thumb
            ]);

            $image_name = $request->file('image')->store('posts',['disk' => 'public']);
            $thumb_name = 'thumbs/'.$image_name;
            $full_path = storage_path('app/public/'.$image_name);
            $full_thumb_path = storage_path('app/public/'.$thumb_name);
    
            $thumb = Image::make($full_path);
            $thumb->fit(350, 350, function($constraint){
                $constraint->aspectRatio();
            })->save($full_thumb_path);

        }
        else{
            $image_name = $post->image;
            $thumb_name = $post->thumb;
        }

        $post->update([
            'image' => $image_name,
            'thumb' => $thumb_name,
            'title' => $request->post('title'),
            'content' => $request->post('content')
        ]);
        return redirect()->route('admin.posts.index')->with(['success'=> 'Yangilandi']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        Storage::disk('public')->delete([
            $post->image,
            $post->thumb
        ]);
        return redirect()->route('admin.posts.index')->with(['delete' => 'Yangilik o`chirildi']);
    }
}
