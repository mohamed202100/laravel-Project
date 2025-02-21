<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        return view('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required', 'regex:/^[a-zA-Z\s]+$/']
        ]);


        $name =$request->name;
        $data=[
            'name'=>$name,
        ];

        Category::create($data);
        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $category = Category::find($id);
        return view('category.update',compact('category'));
    }


    public function execute(Request $request)
    {
        $request->validate([
            'name'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
        ]);

        $name =$request->name;
        $id=$request->id;

        $category = Category::find($id);

        $data=[
            'name'=>$name,
        ];

        $category->update($data);
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if($category){
        $category->delete();
        return $this->index();}
    }
}
