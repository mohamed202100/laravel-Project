@extends('layout.master')
@section('my-body')
<table  class="table table-striped ">
    <thead>
        <x-table-head>
        <th scope="col" >email</th>
        <th scope="col" >profile_image</th>
        </x-table-head>
    </thead>
    <tbody>

        @foreach ($authors as $author)
        <tr>
            <th>{{$author->id}}</th>
            <td>{{$author->name}}</td>
            <td>{{$author->email}}</td>
            <td>{{$author->profile_image}}</td>
            <td><a href="/authors/update/{{$author->id}}"><button class="btn btn-success">Update</button>
            <form action="/authors/delete/{{$author->id}}" method="POST">
                @csrf
                @method('DELETE')
                <td><a href="/authors/delete/{{$author->id}}"><button class="btn btn-danger ">Delete</button>
                </a></td>
            </form>

        </tr>
        @endforeach

    </tbody>
    <tr><td colspan="6"><a href="/authors/create"><button class="btn btn-success">Create New Author <i class="fa-solid fa-pen-to-square"></i></button></a></td></tr>
</table>
@endsection
