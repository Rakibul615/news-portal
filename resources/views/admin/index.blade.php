@extends('admin.master')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->status}}</td>
                <td>
                    <a href="{{route('admin.edit', ['id' => $post->id])}}" class="btn btn-info btn-sm ">Edit</a>
                    <a href="{{route('admin.delete', ['id' => $post->id])}}" class="btn btn-warning btn-sm ">Delete</a>
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>


@endsection
