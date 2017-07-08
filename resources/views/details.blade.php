@extends('layout')

@section('content')
      <h2> Product details
      {{ $product->name }} </h2>
      <ul>
        <li>Name: {{ $product->name }}</li>
        <li>Price {{ $product->price  }}</li>
        <li>Description: {{ $product->description or "Does not cointain description" }}</li>
        <li>Quantity: {{ $product->quantity }}</li>
      </ul>
@stop
