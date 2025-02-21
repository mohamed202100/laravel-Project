@extends('layout.master')
@section('my-body')
<table  class="table table-striped ">
    <thead>
        <x-table-head><th scope="col" >email</th>
        <th scope="col" >phone</th></x-table-head>
    </thead>
    <tbody>

        @foreach ($students as $student)
        <tr>
            <th>{{$student->id}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td><a href="/students/update/{{$student->id}}"><button class="btn btn-success">Update</button>
            <form action="/students/delete/{{$student->id}}" method="POST">
                @csrf
                @method('DELETE')
                <td><a href="/students/delete/{{$student->id}}"><button class="btn btn-danger ">Delete</button>
                </a></td>
            </form>

        </tr>
        @endforeach

    </tbody>
    <tr><td colspan="6"><a href="/students/create"><button class="btn btn-success">Create New student <i class="fa-solid fa-pen-to-square"></i></button></a></td></tr>
</table>
@endsection
