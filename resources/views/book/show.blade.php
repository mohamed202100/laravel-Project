@extends('layout.master')
@section('my-body')
    <div>
        <h1>book {{$book->name}}</h1>
        <p>id : {{$book->id}}</p>
        <p>description: {{$book->description}}</p>
        <p>price : {{$book->price}}</p>
        <p>author_name : {{$book->authors->name}}</p>
        <p>student_owner : {{$book->students->name}}</p>
    </div>
@endsection
