<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(){
        return view('book.create');
    }
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

    }

}
