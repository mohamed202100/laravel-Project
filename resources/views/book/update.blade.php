@extends('layout.master')
@section('my-body')
    <form class="form-container" action="/books/update" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset><legend>Create New Book</legend>
            <br>
        <input type="hidden" name="id" value="{{$book->id}}">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{$book->name}}">
        <label for="description">description:</label>
        <textarea id="description" name="description">{{$book->description}}</textarea>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="{{$book->price}}">
        <label for="author">author:</label>
        <input type="text" id="author" name="author" value="{{$book->author}}">
        <img src="{{asset('upload/images/'.$book->image)}}" alt="" width="100" height="100">
        <button class="btn btn-success">Update</button>
        </fieldset>
    </form>
    <div>
        @if($errors->any())
        @foreach ($errors->all() as $error)
        <p class="text-danger">{{$error}}</p>
        @endforeach
        @endif
    </div>
@endsection
