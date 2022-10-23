@extends('layouts.app')
@section('content')
@if (Auth::user()->roles[0]['name'] == 'Admin')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
                @can('product-create')
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                @endcan
            </div>
            <br>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-dark table-striped">
        <tr style="" >
            <th>No</th>
            <th>Name</th>
            <th>Details</th>

            <th width="280px">Action</th>

        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>

                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                    @can('product-edit')
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    @endcan
                    @csrf
                    @method('DELETE')
                    @can('product-delete')
                    <button  onclick="return confirm('Are you sure you want to delete?');"  type="onclick" class="btn btn-danger">Delete</button>

                    @endcan
                </form>

            </td>
        </tr>
        @endforeach
    </table>
@else

<h3> <center>All products :  </center> </h3>
<br>

    <div class="row row-cols-4 g-5 mx-5 ">

    @foreach ($products as $product)
   <div class="col ">
    <div class="card" style="width: 18rem;">
        <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-13-pink-select-2021?wid=940&hei=1112&fmt=png-alpha&.v=1645572315935" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title"><b> <center> {{ $product->name }}</center></b></h4>
          <p class="card-text"> <center>{{ $product->detail }} </center></p>
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        </div>
      </div>
 </div>

      @endforeach
 </div>

  @endif

    {!! $products->links() !!}
@endsection
