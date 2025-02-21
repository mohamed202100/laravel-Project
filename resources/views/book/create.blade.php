@extends('layout.master')
@section('my-body')
    <form class="form-container" action="/books/store" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset><legend>Create New Book</legend>
            <br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{old('name')}}">
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label for="description">description:</label>
        <textarea id="description" name="description">{{old('description')}}</textarea>
        @error('description')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="{{old('price')}}">
        @error('price')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label for="author_id">author_id:</label>
        <input type="author_id" id="author_id" name="author_id" value="{{old('author_id')}}">
        @error('author_id')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label for="student_id">student_id:</label>
        <input type="student_id" id="student_id" name="student_id" value="{{old('student_id')}}">
        @error('student_id')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label>Categories</label>
        <select name="category_ids[]" multiple>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <label for="image">upload image:</label>
        <input type="file" id="image" name="image">
        <button class="btn btn-success">Create</button>
        </fieldset>
    </form>

@endsection
