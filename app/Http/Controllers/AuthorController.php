<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::get();
        return  view('author.index',compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'email'=>['required'],
        ]);


        $name =$request->name;
        $email = $request->email;
        $bio =$request->bio;
        $profile_image = $request->profile_image;
        $job_description = $request->job_description;

        $data=[
            'name'=>$name,
            'email'=>$email,
            'bio' =>$bio,
            'profile_image' =>$profile_image,
            'job_description' =>$job_description,

        ];

        Author::create($data);
        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $author = Author::find($id);
        return view('author.update',compact('author'));
    }


    public function execute(Request $request)
    {
        $request->validate([
            'name'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'email'=>['required'],
        ]);

        $name =$request->name;
        $email = $request->email;
        $bio =$request->bio;
        $profile_image = $request->profile_image;
        $job_description = $request->job_description;
        $id=$request->id;

        $author = Author::find($id);

        $data=[
            'name'=>$name,
            'email'=>$email,
            'bio' =>$bio,
            'profile_image' =>$profile_image,
            'job_description' =>$job_description,

        ];

        $author->update($data);
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $author = Author::find($id);
        if($author){
        $author->delete();
        return $this->index();}
    }
}
