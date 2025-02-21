<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
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
        $categories = Category::get();
        return view('book.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

        $request->validate([
            'name'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'description'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'price'=>'numeric|required',
            'author_id'=>'numeric|required',
            'student_id'=>'numeric|required',
            'category_ids'=>'required|array',
            'category_ids.*'=>'integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
        $author_id = $request->author_id;
        $student_id = $request->student_id;

        $image = $filename;

        $data=[
            'name'=>$name,
            'description'=>$description,
            'price'=>$price,
            'author_id'=>$author_id,
            'student_id'=>$student_id,
            'image'=>$image
        ];

        $book = Book::create($data);
        $category_ids = $request->category_ids;
        $book->categories()->attach($category_ids);
        return $this->index();

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::find($id);
        return view('book.show', compact('book'));
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
            'author_id'=>'numeric|required',
            'student_id'=>'numeric|required',
        ]);
        $name =$request->name;
        $description = $request->description;
        $price = $request->price;
        $author_id = $request->author_id;
        $student_id = $request->student_id;
        $id= $request->id;

        $book=Book::find($id);
        $data=[
            'name'=>$name,
            'description'=>$description,
            'price'=>$price,
            'author_id'=>$author_id,
            'student_id'=>$student_id
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
