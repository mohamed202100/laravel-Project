@extends('layout.master')
@section('my-body')
    <form class="form-container" action="/categories/update" method="post">
        @csrf
        <fieldset><legend>Update Category</legend>
            <br>
        <input type="hidden" name="id" value="{{$category->id}}">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{$category->name}}">
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <button class="btn btn-success">Update</button>
        </fieldset>
    </form>
@endsection
