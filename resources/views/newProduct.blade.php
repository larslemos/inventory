@extends('layout')

@section('content')
  <h2> New Product </h2>

  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
      <li> {{ $error }} </li>
    @endforeach
  </div>

  <form action="/products/create" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
      <label for="name"> Name </label>
      <input class="form-control" type="text" name="name" placeholder="Enter the name">
    </div>
    <div class="form-group">
      <label for="price"> Price </label>
      <input class="form-control" type="number" name="price" placeholder="Enter the quantity" >
    </div>
    <div class="form-group">
      <label for="quantity"> Quantity </label>
      <input class="form-control" type="number" name="quantity" placeholder="Enter the quantity">
    </div>
    <div class="form-group">
      <label for="size">Size </label>
      <input type="text" class="form-control" id="size" name="size" placeholder="Type the size">
    </div>
    div.<div class="form-group">
      <label for="category"></label>
      <select class="form-control" name="category">
        @foreach($categories as $category)
        <option value="{{$category->id}}"> {{ $category->name}}</option>
        @endforeach
      </select>
      <p class="help-block">Help text here.</p>
    </div>
    <div class="form-group">
      <label for="description"> Description </label>
      <textarea class="form-control" name="description">  </textarea>
    </div>

    <button class="btn btn-primary"> Add </button>
  </form>
@stop
