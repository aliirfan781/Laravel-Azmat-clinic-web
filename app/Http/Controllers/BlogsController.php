<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blogs::all();
        return view('blogs', compact('blogs'));
        //
    }

    public function admin()
    {
        $blogs = Blogs::all();
        return view('Backend/admin-blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend/add-blog');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function upload_blog(Request $request)
    {


        $request->validate([
            'title' => 'required',
            'article' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048|nullable'
        ]);

        $fileName = ''; // Initialize the variable

        if ($request->file('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $filePath = $request->image->storeAs('public/img', $fileName);
        }

        $blog = Blogs::create([
            'title' => $request->title,
            'article' => $request->article,
            'image' => $fileName,
        ]);

        return redirect()->route('Admin-Blogs')->with('message', 'Blog uploaded successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blogs::where('id', $id)->first();
        return view('Backend.edit-blog', compact('blog'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}