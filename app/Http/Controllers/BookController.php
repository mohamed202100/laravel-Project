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
        $name =$request->name;
        $description = $request->description;
        $price = $request->price;
        $author = $request->author;

        $data=[
            'name'=>$name,
            'description'=>$description,
            'price'=>$price,
            'author'=>$author
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
    public function edit(string $id)
    {
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
