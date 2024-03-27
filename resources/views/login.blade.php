@extends('layout.loginlayout')


@section('content')

<form action="{{ route('dashboard') }}" method="GET">
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="USERNAME" style="width: 250px; text-align: center; border: 1px solid red; font-weight: bold; " >
  </div>

  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="PASSWORD" style="width: 250px; text-align: center; border: 1px solid red; font-weight: bold; ">
  </div>

  <button type="submit" class="btn btn-primary" style ="width: 180px; background-color :#5D3FD3; font-weight: bold; border: 0.5px solid white;">LOGIN</button>
</form>

@endsection