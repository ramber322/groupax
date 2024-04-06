@extends('layout.mbTransactlayout')

@section('content')
  <div class ="purchasenotify" style="margin-bottom: 10px;">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style ="width: 200px; background: #36454F; border-radius: 100px; ">
  new balance +50..
  </button>
  </div>
  
  <div class ="purchasenotify" style="margin-bottom: 10px;">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style ="width: 200px; background: #36454F; border-radius: 100px;">
  your remaining balance..
  </button>
  </div>
  
  <div class ="purchasenotify" style="margin-bottom: 10px;">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style ="width: 200px; background: #36454F;  border-radius: 100px; ">
  your purchased..
  </button>
  </div>
  
  @endsection
  
 