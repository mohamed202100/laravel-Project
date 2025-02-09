<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::get();
        return  view('book.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

        $request->validate([
            'name'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'description'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'price'=>'numeric|required',
            'author'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $extention = $image->extension();
            $filename = "library" . time() . '.' . $extention;
            $image->move(public_path('upload/images') , $filename);
        }


        $name =$request->name;
        $description = $request->description;
        $price = $request->price;
        $author = $request->author;
        $image = $filename;

        $data=[
            'name'=>$name,
            'description'=>$description,
            'price'=>$price,
            'author'=>$author,
            'image'=>$image
        ];

        Book::create($data);
        return $this->index();

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
    public function delete(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $book = Book::find($id);
        return view('book.update',compact('book'));
    }

    public function execute(Request $request)
    {
        $request->validate([
            'name'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'description'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'price'=>'numeric|required',
            'author'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
        ]);
        $name =$request->name;
        $description = $request->description;
        $price = $request->price;
        $author = $request->author;
        $id= $request->id;

        $book=Book::find($id);
        $data=[
            'name'=>$name,
            'description'=>$description,
            'price'=>$price,
            'author'=>$author
        ];
        $book->update($data);
        return $this->index();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        if($book){
        $book->delete();
        return $this->index();
    }}
}
