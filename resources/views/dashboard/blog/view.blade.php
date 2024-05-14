@extends('dashboard')
@section('title', 'View Blog')
@section('content')

<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">View Blogs</h4>
</div><!-- d-flex -->

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="col py-3">

            <div class="col-md-12 whitebox">
                <div class="widget logincontainer">
                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Publish Date</th>
                            <th>Status</th>
                            <th>Home</th>
                            <th>Action</th>
                        </tr>
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{$blog->id}}</td>
                            <td>{{$blog->blog_title}}</td>
                            <td>{{$blog->blog_date}}</td>
                            <td class="{{$blog->status == 'Deactive' ? 'text-danger' : 'text-success'}}">
                                {{$blog->status}}
                            </td>
                            <td class="{{$blog->home == 'No' ? 'text-danger' : 'text-success'}}">
                                {{$blog->home}}
                            </td>
                            <td>
                                <a class="text-warning" style="float:left" href="{{ route('blog.edit', $blog->id) }}"><i class="fa fa-edit"></i></a>
                                <form style="width:10px;float:left" action="{{route('blog.destroy', $blog->id)}}" method="POST">
                                @method('delete') @csrf 
                                <button type="submit" class="text-danger" style="background:none" onclick="return confirm('Are you sure, you want to delete the blog?')"><i class="fa fa-trash"></i></button></form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $blogs->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection