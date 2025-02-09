@extends('layout.master')
@section('my-body')
    <form class="form-container" action="/books/store" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset><legend>Create New Book</legend>
            <br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{old('name')}}">
        <label for="description">description:</label>
        <textarea id="description" name="description">{{old('description')}}</textarea>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="{{old('price')}}">
        <label for="author">author:</label>
        <input type="text" id="author" name="author" value="{{old('author')}}">
        <label for="image">upload image:</label>
        <input type="file" id="image" name="image">
        <button class="btn btn-success">Create</button>
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
