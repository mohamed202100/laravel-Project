@extends('layout.master')
@section('my-body')
    <form class="form-container" action="/authors/store" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset><legend>Create New Author</legend>
            <br>
        <x-form-content/>
        <label for="profile_image">upload image:</label>
        <input type="file" id="profile_image" name="profile_image">
        <label for="bio">bio:</label>
        <input type="bio" id="bio" name="bio" value="{{old('bio')}}">
        @error('bio')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label for="job_description">job_description:</label>
        <textarea name="job_description" id="job_description">{{old('job_description')}}</textarea>
        @error('job_description')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <button class="btn btn-success">Create</button>
        </fieldset>
    </form>

@endsection
