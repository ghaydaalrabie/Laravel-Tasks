@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <br>
    <div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Product Information : </li>
    <li class="list-group-item">   <strong>Name:</strong> {{ $product->name }}</li>
    <li class="list-group-item">   <strong>Details:</strong> {{ $product->detail }}</li>
  </ul>
</div>
   
@endsection
