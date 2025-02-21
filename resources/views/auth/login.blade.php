@extends('layout.master')
@section('my-body')
<p>Welcome in login page</p>
<form class="form-container" action="/auth/handleLogin" method="post">
    @csrf
    <label for="email">Email: </label>
    <input type="email">
    <label for="password">password: </label>
    <input type="password">
    <button class="btn btn-success">Login</button>
    <br><br>
    <a href="/auth/register">
        <p> Register Now</p>
    </a>
    <x-errors/>
</form>

@endsection
