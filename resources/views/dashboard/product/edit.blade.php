@extends('dashboard')
@section('title', 'Update product')
@section('content')

<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Edit Item</h4>
</div><!-- d-flex -->

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="col py-3">
            <div class="whitebox">
                <div class="widget logincontainer">
                    <form class="getin_form border-form" id="login" action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="title" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Item Title:" required id="title" name="title" value="{{ $product->title }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="title" class="d-none"></label>
                                    <input class="form-control" type="number" placeholder="Resident Price (KSH):" required id="title" name="resident" value="{{ $product->resident }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="title" class="d-none"></label>
                                    <input class="form-control" type="number" placeholder="Non Resident Price (USD):" required id="title" name="non_resident" value="{{ $product->non_resident }}">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="image" class="d-none"></label>
                                    <input class="form-control" type="file" placeholder="Item Image:" id="image" name="image">
                                    <label style="color:red">Item image size 6:6 or (600px X 600px)</label>
                                </div>
                                <img src="{{$product->image}}" altl="" style="width:100%;max-width:200px;margin-bottom:15px">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="product-details" class="d-none"></label>
                                    <textarea class="form-control" placeholder="Item details:" required id="details" name="details" rows="10">{{ $product->details }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom30 ml-1">
                                    <div class="form-check text-left">
                                        <input class="form-check-input" {{$product->status == 'Active'?'checked':''}} type="checkbox" value="Active" name="status" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Publish</label>
                                    </div>
                                    <div class="form-check text-left">
                                        <input class="form-check-input" {{$product->home == 'Yes'?'checked':''}} type="checkbox" value="Yes" name="home" id="home">
                                        <label class="form-check-label" for="home">Home</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="button gradient-btn">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection