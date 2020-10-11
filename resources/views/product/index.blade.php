@extends('product.layout')
@section('content')
<br><br><br>
<div class="row">
    <div class="col-lg-12 margin-tb ">
        <div class="pull-left">
            <h2>Product List</h2>
        </div>
        <div class="pull-right"><a href="{{ route('create.product') }}" class="btn btn-success">Create New Product</a></div>
    </div>
</div>

@if($message = Session::get('success'))
<div class='alert alert-success'>
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
    <th>Product name</th>
    <th>Product code</th>
    <th>Details</th>
    <th>Product logo</th>
    <th>Action</th>
    </tr>
    @foreach($product as $pro)
    <tr>
        <td>{{ $pro-> product_name }}</td>
        <td>{{ $pro-> product_code }}</td>
        <td>{{ str_limit($pro->details, $limit = 70)  }}</td>
        <td><img src="{{URL::to($pro->logo)}}" height="70px" width="80px" ></td>
        <td>
            <a href="{{ URL::to('show/product/'.$pro->id) }}" class="btn btn-info">Show</a>
            <a href="{{ URL::to('edit/product/'.$pro->id) }}" class="btn btn-primary">Edit</a>
            <a href="{{ URL::to('delete/product/'.$pro->id) }}" class="btn btn-danger"
                onclick="return confirm('Are You Sure')">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
{!! $product->links() !!}
@endsection
