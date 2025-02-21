@extends('layout.master')
@section('my-body')
    <form class="form-container" action="/authors/update" method="post">
        @csrf
        <fieldset><legend>Update Author</legend>
            <br>
        <input type="hidden" name="id" value="{{$author->id}}">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{$author->name}}">
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label for="email">email:</label>
        <input type="email" id="email" name="email" value="{{$author->email}}">
        @error('email')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label for="profile_image">upload image:</label>
        <input type="file" id="profile_image" name="profile_image">
        <label for="bio">bio:</label>
        <input type="bio" id="bio" name="bio" value="{{$author->bio}}">
        @error('bio')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label for="job_description">job_description:</label>
        <textarea name="job_description" id="job_description">{{$author->job_description}}</textarea>
        @error('job_description')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <button class="btn btn-success">Update</button>
        </fieldset>
    </form>
@endsection
