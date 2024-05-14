@extends('dashboard')
@section('title', 'View Portfolio')
@section('content')

<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">View Portfolio</h4>
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
                        @foreach($portfolios as $portfolio)
                        <tr>
                            <td>{{$portfolio->id}}</td>
                            <td>{{$portfolio->title}}</td>
                            <td class="{{$portfolio->status == 'Deactive' ? 'text-danger' : 'text-success'}}">
                                {{$portfolio->status}}
                            </td>
                            <td class="{{$portfolio->home == 'No' ? 'text-danger' : 'text-success'}}">
                                {{$portfolio->home}}
                            </td>
                            <td>
                                <a class="text-warning" style="float:left" href="{{ route('portfolio.edit', $portfolio->id) }}"><i class="fa fa-edit"></i></a>
                                <form style="width:10px;float:left" action="{{route('portfolio.destroy', $portfolio->id)}}" method="POST">
                                @method('delete') @csrf 
                                <button type="submit" class="text-danger" style="background:none" onclick="return confirm('Are you sure, you want to delete the portfolio?')"><i class="fa fa-trash"></i></button></form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $portfolios->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection