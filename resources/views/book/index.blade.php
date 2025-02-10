@extends('layout.master')
@section('my-body')
<table  class="table table-striped ">
    <thead>
        <th scope="col" >Id</th>
        <th scope="col" >Name</th>
        <th scope="col" >Description</th>
        <th scope="col" >Price</th>
        <th scope="col" >Author</th>
        <th scope="col" >created_at</th>
        <th scope="col-2">Actions</th>
    </thead>
    <tbody>

        @foreach ($books as $book)
        <tr>
            <th>{{$book->id}}</th>
            <td>{{$book->name}}</td>
            <td>{{$book->description}}</td>
            <td>{{$book->price}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->created_at}}</td>
            <td><a href="/books/update/{{$book->id}}"><button class="btn btn-success">Update</button>
            <form action="/books/delete/{{$book->id}}" method="POST">
                @csrf
                @method('DELETE')
                <td><a href="/books/delete/{{$book->id}}"><button class="btn btn-danger ">Delete</button>
                </a></td>
            </form>

        </tr>
        @endforeach

    </tbody>
    <tr><td colspan="8"><a href="/books/create"><button class="btn btn-success">Create New Book <i class="fa-solid fa-pen-to-square"></i></button></a></td></tr>
</table>
@endsection
