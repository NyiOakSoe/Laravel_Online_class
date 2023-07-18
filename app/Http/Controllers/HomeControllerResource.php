<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;

class HomeControllerResource extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=posts::all();
        return view('home',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
         

        $post=new posts();
        $post->name=$request->name;
        $post->content=$request->content;
        $post->save();
        return redirect('/post');

    }

    /**
     * Display the specified resource.
     */
    public function show(posts $post)
    {
        return view('show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(posts $post)
    {
        return view('edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, posts $post)
    {
        
        $post->name=$request->name;
        $post->content=$request->content;
        $post->save();
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(posts $post)
    {
        $post->delete();
        return redirect('/post');
    }
}
