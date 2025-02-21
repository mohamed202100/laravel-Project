@extends('layout.master')
@section('my-body')
    <form class="form-container" action="/students/store" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset><legend>Create New Student</legend>
            <br>
            <x-form-content/>
            <label for="phone">phone:</label>
        <input type="phone" id="phone" name="phone" value="{{old('phone')}}">
        @error('phone')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <button class="btn btn-success">Create</button>
        </fieldset>
    </form>

@endsection
