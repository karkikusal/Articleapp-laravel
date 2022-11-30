@extends('layout.app')



@section('content')

<div class="container">
  @if(Session::has('fail'))
  <div class="alert alert-danger" role="alert">
    {{Session::get('fail')}}
</div>
@endif
<form action="{{route('loginuser')}}" method="post">
  @csrf
<h1 class="text-center mt-5 ">Login</h1>

<div class="container mt-5 ">
        <div class="row d-flex  justify-content-center">
        <div class="row d-flex  justify-content-center">
            <div class="col-8 border border-info p-5 ">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label><div class="col-sm-3">
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label><div class="col-sm-3">
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1"> 
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-success">submit</button>
</div>
</form>


@endsection

