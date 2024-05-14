@extends('dashboard')
@section('title', 'Add a photo')
@section('content')

<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Add a photo</h4>
</div><!-- d-flex -->

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div style="text-align:right;padding:10px">
            <a class="btn btn-info" href="{{route('gallery.index')}}"><i class="fa fa-list"></i></a>
        </div>
        <div class="col py-3">
            <div class="whitebox">
                <div class="widget logincontainer">
                    <form class="getin_form border-form" id="login" action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="title" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Gallery Title:" id="title" name="title">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="image" class="d-none"></label>
                                    <input class="form-control" type="file" placeholder="Gallery Image:" required id="image" name="image">
                                    <label style="color:red">Gallery image size 6:6 or (600px X 600px)</label>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="details" class="d-none"></label>
                                    <textarea class="form-control" placeholder="Gallery details:" id="details" name="details" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom30 ml-1">
                                    <div class="form-check text-left">
                                        <input class="form-check-input" checked type="checkbox" value="Active" name="status" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Publish
                                        </label>
                                    </div>
                                    <div class="form-check text-left">
                                        <input class="form-check-input"  type="checkbox" value="Yes" name="home" id="home">
                                        <label class="form-check-label" for="home">Home</label>
                                    </div>
                                </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection