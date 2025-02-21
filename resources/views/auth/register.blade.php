@extends('layout.master')
@section('my-body')
<p>Welcome in register page</p>
<form class="form-container" action="/auth/handleRegister" method="post">
    <x-form-content/>
    <label for="password">password: </label>
    <input type="password">
    <button class="btn btn-success">Register</button>
    <br><br>
    <a href="/auth/login">
        <p> Have account?</p>
    </a>
    <x-errors/>
</form>

@endsection
