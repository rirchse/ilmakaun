@extends('dashboard')
@section('title', 'Update Blog')
@section('content')

<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Edit Blog</h4>
</div><!-- d-flex -->

<div class="br-pagebody">
    <div class="br-section-wrapper col-md-10">

        <div class="col py-3">

            <div class="whitebox">
                <div class="widget logincontainer">
                    <form class="getin_form border-form" id="login" action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="blog-title" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Blog Title:" required id="blog-title" name="blog_title" value="{{ $blog->blog_title }}">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="blog-date" class="d-none"></label>
                                    <input class="form-control date-picker" type="date" placeholder="Publish Date: (MM-DD-YYYY)" id="blog-date" name="blog_date" value="{{ $blog->blog_date }}">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="blog-image" class="d-none"></label>
                                    <input class="form-control" type="file" placeholder="Blog Image:" id="blog-image" name="blog_image">
                                    <label style="color:red">Blog image size 6:4 or (600px X 400px)</label>
                                </div>
                                <img src="{{$blog->blog_image}}" altl="" style="width:100%;max-width:200px;margin-bottom:15px">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="blog-details" class="d-none"></label>
                                    <textarea class="form-control" placeholder="Blog details:" id="details" name="blog_details" rows="10">{{ $blog->blog_details }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom30 ml-1">
                                    <div class="form-check text-left">
                                        <input class="form-check-input" {{$blog->status == 'Active'?'checked':''}} type="checkbox" value="Active" name="status" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Publish</label>
                                    </div>
                                    <div class="form-check text-left">
                                        <input class="form-check-input" {{$blog->home == 'Yes'?'checked':''}} type="checkbox" value="Yes" name="home" id="home">
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