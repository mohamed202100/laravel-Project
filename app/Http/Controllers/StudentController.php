<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::get();
        return  view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("student.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'email'=>['required','unique'],
           'phone'=>['required'],
        ]);


        $name =$request->name;
        $email = $request->email;
        $phone = $request->phone;

        $data=[
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone
        ];

        Student::create($data);
        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $student = Student::find($id);
        return view('student.update',compact('student'));
    }

    public function execute(Request $request)
    {
        $request->validate([
            'name'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'email'=>['required','unique'],
           'phone'=>['required'],
        ]);


        $name =$request->name;
        $email = $request->email;
        $phone = $request->phone;
        $id= $request->id;


        $data=[
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone
        ];

        $student=Student::find($id);
        $student->update($data);
        return $this->index();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($student)
    {
        $student = Student::find($student);
        if($student){
        $student->delete();
        return $this->index();}
}}
