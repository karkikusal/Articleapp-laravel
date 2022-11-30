@extends('layout.app')


@section('content')
<h1 class="text-center mt-5">SignUp</h1>
    <div class="container mt-5">
        <div class="row d-flex  justify-content-center">
            
<form class="form form-control" action="{{route('register')}}" method="post">
    @csrf
 
    

    <div class="mb-3">
    <label  class="form-label">Name</label><div class="col-sm-3">
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"  name=name>
    @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
  </div><br>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label><div class="col-sm-3">
    <input type="email" class="form-control @error('email') is-invalid @enderror"  id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
  </div><br>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label><div class="col-sm-3">
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password">
                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
</div><br>
  
  <button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection