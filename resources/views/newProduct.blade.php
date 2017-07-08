@extends('layout')

@section('content')
  <h2> New Product </h2>

  <form action="/products/create" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <div class="form-group">
      <label for="name"> Name </label>
      <input class="form-control" type="text" name="name" >
    </div>
    <div class="form-group">
      <label for="price"> Price </label>
      <input class="form-control" type="number" name="price" >
    </div>
    <div class="form-group">
      <label for="quantity"> Quantity </label>
      <input class="form-control" type="number" name="quantity">
    </div>
    <div class="form-group">
      <label for="description"> Description </label>
      <textarea class="form-control" name="description">  </textarea>
    </div>

    <button class="btn btn-primary"> Add </button>
  </form>
@stop
