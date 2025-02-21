@extends('layout.master')
@section('my-body')
    <form class="form-container" action="/books/update" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset><legend>Update Book</legend>
            <br>
        <input type="hidden" name="id" value="{{$book->id}}">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{$book->name}}">
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label for="description">description:</label>
        <textarea id="description" name="description">{{$book->description}}</textarea>
        @error('description')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="{{$book->price}}">
        @error('price')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label for="author_id">author_id:</label>
        <input type="author_id" id="author_id" name="author_id" value="{{$book->author_id}}">
        @error('author_id')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <img src="{{asset('upload/images/'.$book->image)}}" alt="" width="100" height="100">
        <label for="student_id">student_id:</label>
        <input type="student_id" id="student_id" name="student_id" value="{{$book->student_id}}">
        @error('student_id')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <img src="{{asset('upload/images/'.$book->image)}}" alt="" width="100" height="100">
        <button class="btn btn-success">Update</button>
        </fieldset>
    </form>
@endsection
