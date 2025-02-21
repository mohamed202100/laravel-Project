@extends('layout.master')
@section('my-body')
<table  class="table table-striped ">
    <thead>
        <x-table-head>
            <th scope="col" >Description</th>
            <th scope="col" >Price</th>
            <th scope="col" >author_id</th>
            <th scope="col" >student_id</th>
        </x-table-head>
    </thead>
    <tbody>

        @foreach ($books as $book)
        <tr>
            <th>{{$book->id}}</th>
            <td>{{$book->name}}</td>
            <td>{{$book->description}}</td>
            <td>{{$book->price}}</td>
            <td>{{$book->author_id}}</td>
            <td>{{$book->student_id}}</td>
            <td><a href="/books/update/{{$book->id}}"><button class="btn btn-success">Update</button>
            <form action="/books/delete/{{$book->id}}" method="POST">
                @csrf
                @method('DELETE')
                <td><a href="/books/delete/{{$book->id}}"><button class="btn btn-danger ">Delete</button>
                </a></td>
            </form>
            <td><a href="/books/show/{{$book->id}}">show book</a></td>


        </tr>
        @endforeach

    </tbody>
    <tr><td colspan="9"><a href="/books/create"><button class="btn btn-success">Create New Book <i class="fa-solid fa-pen-to-square"></i></button></a></td></tr>
</table>
@endsection
