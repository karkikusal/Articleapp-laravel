@extends('layout.app')



@section('content')
<div class="text text-start container">



<button type="submit" class="btn btn-warning"><a href="logout" >Logout</a></button>


<table class="table">
    <thead>
        <tr>

            <th>Article Title</th>
            <th>Created by</th>
            <th>Action</th>
        </tr>


</thead>
<tbody>

@foreach($posts as $post)
<tr>
    <td>{{$post->title}}</td>
    <td>{{$post->user->name}}</td>
    @if(auth()->user()->id ==$post->user->id)
    <td><a href="{{url('delete/'.$post->id)}}" class="btn btn-danger">Delete</a></td>
    @endif
</tr>
@endforeach
</tbody>
</div>
@endsection