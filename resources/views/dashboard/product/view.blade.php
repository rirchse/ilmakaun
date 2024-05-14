@extends('dashboard')
@section('title', 'View Product')
@section('content')

<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">View Items</h4>
</div><!-- d-flex -->

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="col py-3">
            <div class="whitebox">
                <div class="widget logincontainer">
                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Home</th>
                            <th>Action</th>
                        </tr>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->title}}</td>
                            <td class="{{$product->status == 'Deactive' ? 'text-danger' : 'text-success'}}">
                                {{$product->status}}
                            </td>
                            <td class="{{$product->home == 'No' ? 'text-danger' : 'text-success'}}">
                                {{$product->home}}
                            </td>
                            <td>
                                <a class="text-warning" style="float:left" href="{{ route('product.edit', $product->id) }}"><i class="fa fa-edit"></i></a>
                                <form style="width:10px;float:left" action="{{route('product.destroy', $product->id)}}" method="POST">
                                @method('delete') @csrf 
                                <button type="submit" class="text-danger del-btn" onclick="return confirm('Are you sure, you want to delete the product?')"><i class="fa fa-trash"></i></button></form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection