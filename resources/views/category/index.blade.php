@extends('layout.master')
@section('my-body')
<table  class="table table-striped ">
    <thead>
        <x-table-head/>
    </thead>
    <tbody>

        @foreach ($categories as $category)
        <tr>
            <th>{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td><a href="/categories/update/{{$category->id}}"><button class="btn btn-success">Update</button>
            <form action="/categories/delete/{{$category->id}}" method="POST">
                @csrf
                @method('DELETE')
                <td><a href="/categories/delete/{{$category->id}}"><button class="btn btn-danger ">Delete</button>
                </a></td>
            </form>

        </tr>
        @endforeach

    </tbody>
    <tr><td colspan="4"><a href="/categories/create"><button class="btn btn-success">Create New Category <i class="fa-solid fa-pen-to-square"></i></button></a></td></tr>
</table>
@endsection
