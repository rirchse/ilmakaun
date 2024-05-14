@extends('dashboard')
@section('title', 'View Gallery')
@section('content')

<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">View Gallery</h4>
</div><!-- d-flex -->

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div style="text-align:right;padding:10px">
            <a class="btn btn-info" href="{{route('gallery.create')}}"><i class="fa fa-plus"></i></a>
        </div>
        <div class="col py-3">
            <div class="whitebox">
                <div class="widget logincontainer">
                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Home</th>
                            <th>Action</th>
                        </tr>
                        @foreach($galleries as $gallery)
                        <tr>
                            <td>{{$gallery->id}}</td>
                            <td>{{$gallery->title}}</td>
                            <td>
                                <img src="{{$gallery->image}}" alt="image" style="max-width:150px" ></td>
                            <td class="{{$gallery->status == 'Deactive' ? 'text-danger' : 'text-success'}}">
                                {{$gallery->status}}
                            </td>
                            <td class="{{$gallery->home == 'No' ? 'text-danger' : 'text-success'}}">
                                {{$gallery->home}}
                            </td>
                            <td>
                                <a class="text-warning" style="float:left" href="{{ route('gallery.edit', $gallery->id) }}"><i class="fa fa-edit"></i></a>
                                <form style="width:10px;float:left" action="{{route('gallery.destroy', $gallery->id)}}" method="POST">
                                @method('delete') @csrf 
                                <button type="submit" class="text-danger del-btn" onclick="return confirm('Are you sure, you want to delete the gallery?')"><i class="fa fa-trash"></i></button></form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $galleries->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection