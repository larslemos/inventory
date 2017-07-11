@extends('layout')

@section('content')

    @if(old('name'))
      <div class="alert alert-success">
        Product {{ old('name') }} created with success
      </div>
    @endif


    <h2> List of products </h2>
    <table class="table table-bordered">
        <th>
          <thead> Name </thead>
          <thead> Price </thead>
          <thead> Description </thead>
          <thead> Quantity </thead>
            <thead> Size </thead>
          <thead> View  </thead>
          <thead> Delete  </thead>
        </th>
        <tbody>
          @foreach ($products as $product)
          <tr class="{{ $product->quantity <=1 ? 'danger': '' }}">
            <td>{{ $product->name }}</td>
            <td>{{ $product->price  }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->size }}</td>
            <!-- <td>{{ $product->category->name }}</td> -->
            <td>
              <!-- Using 2 ways to obtain params  -->
              <!-- <a href="/products/show?id={{ $product->id }} ">    </a> -->
              <a href="/products/show/{{$product->id }}">
               <span class="glyphicon glyphicon-search" aria-hidden="true"> </a></span> </td>
            <td><a href="/products/delete/{{$product->id }}">
             <span class="glyphicon glyphicon-trash" aria-hidden="true"> </a></span> </td>
          </tr>
        @endforeach
        </tbody>
    </table>

@stop
