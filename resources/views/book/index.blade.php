@extends('layout.master')
@section('body')
<table>
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Author</th>
    </thead>
    <tbody>

        @foreach ($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->name}}</td>
            <td>{{$book->description}}</td>
            <td>{{$book->price}}</td>
            <td>{{$book->author}}</td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection
