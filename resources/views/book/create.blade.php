@extends('layout.master')
@section('body')
    <form action="/books/store" method="post">
        @csrf
        <fieldset><legend>Documentation</legend>
            <br>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="description">description:</label><br>
        <textarea id="description" name="description"></textarea><br><br>
        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price"><br><br>
        <label for="author">author:</label><br>
        <input type="text" id="author" name="author"><br><br>

        <input type="submit" id="save" name="save" value="save"><br>
        </fieldset>
    </form>
@endsection
