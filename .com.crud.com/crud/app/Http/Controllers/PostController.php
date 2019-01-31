<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $allPosts = Post::all(); //RETURN ALL POSTS
        $allPosts = Post::orderBy( 'created_at' , 'desc' ) ->  paginate(15); //RETURN ALL POST BY ID DESC ORDER + Paginate 10
        return view('post.index')->with('allPosts', $allPosts);
    }

    // public function recent()
    // {
    //     $allPosts = Post::all(); //RETURN ALL POSTS
    //     // $allPosts = Post::orderBy( 'updated_at' , 'desc' ) ->  paginate(15); //RETURN ALL POST BY ID DESC ORDER + Paginate 10
    //     return view('post.index')->with('allPosts', $allPosts);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //VALIDATE INPUT REQUEST (POST)
        $this ->  validate($request, [
          'title'   =>  'required',
          'body'    =>  'required'
        ]);

        //CREATE POST & SAVE
        $post = new Post;
        $post ->  title   = $request  ->  input('title');
        $post ->  body    = $request  ->  input('body');
        $post ->  user_id = auth()  ->  user()->id;
        $post ->  save();

        return redirect('/post')  ->  with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singlePost = Post::find($id);

        //If not a post or post does not exist throw an error
        if( ! $singlePost){
           return redirect('/post') ->  with('error','Post Not Found');
        }
        return view('post.show')  ->  with('post', $singlePost);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $singlePost = Post::find($id);
          // Match Session user with Post user_id
          if( auth()->user()->id  !==  $singlePost->user_id ){
            return redirect('/post')->with('error', 'Unauthorized User');
          }
        return view('post.edit')  ->  with('post', $singlePost);
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
        //VALIDATING REQUEST
        $this ->  validate($request, [
          'title'   =>  'required',
          'body'    =>  'required'
        ]);


        //FINDING POST AND EDIT w/ REQUEST + SAVE
        $singlePost = Post::find($id);
        $singlePost ->  title = $request  ->  input('title');
        $singlePost ->  body  = $request  ->  input('body');
        $singlePost -> save();

        return redirect('/post')  ->  with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $singlePost = Post::find($id);
          // Match Session user with Post user_id
          if( auth()->user()->id  !==  $singlePost->user_id ){
            return redirect('/post')->with('error', 'Unauthorized User');
          }
        Post::destroy($id);
        return redirect('/post')  ->  with('success', 'Post Removed');
    }
}
