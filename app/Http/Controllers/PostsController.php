<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\post;

class PostsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
    }
    public function index()
    {
        $posts = Post::orderBy('title','asc')->paginate(5);        
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
            'title' =>'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        
        if($request->hasFile('cover_image')){
                // Getting filename with the extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                // Getting filename without extension
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Getting the extension
                $extension = $request-> file('cover_image')->getClientOriginalExtension();
                // Getting filename to store
                $filenameToStore =  $filename.'_'.time().'.'.$extension;

                //saving
                $path = $request->file('cover_image')->storeas('public/cover_images', $filenameToStore);
        } else{
            $filenameToStore = 'noimage.jpg';
        }
        
        
        $post= new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = auth()->user()->id;
        $post->cover_image = $filenameToStore;
        $post->save();
        return redirect('/posts')->with('success','post created');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        if(auth()->user()->id != $post->user_id)
        {
            return redirect('')->with( 'error','unauthorized page' );
        }
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
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
        $this->validate($request, [
            'body' => 'required',
            'title' =>'required'
        ]);

        if($request->hasFile('cover_image')){
            // Getting filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Getting filename without extension
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Getting the extension
            $extension = $request-> file('cover_image')->getClientOriginalExtension();
            // Getting filename to store
            $filenameToStore =  $filename.'_'.time().'.'.$extension;

            //saving
            $path = $request->file('cover_image')->storeas('public/cover_images', $filenameToStore);
            }
    

        $post= Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;

        if($request->hasFile('cover_image')){
            $post->cover_image=$filenameToStore;
        }elseif($request->delete_Picture){
            $post->cover_image='noimage.jpg';
        }   
        $post->save();
        return redirect('/posts')->with('success','post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::find($id);
        $user = auth()->user();
        if($user->id !== $post->user_id)
        {
            return redirect('')->with( 'error','unauthorized page' );
        }
        if($post->cover_image != 'noimage.jpg'){
            //delete
            Storage::delete('public/cover_image'.$post->cover_image);

        }        
        $post->delete();
        return redirect('/posts')->with('success','post Removed');
    }
}
