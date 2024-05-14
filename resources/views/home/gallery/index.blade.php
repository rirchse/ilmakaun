@extends('home')
@section('title', 'Gallery')
@section('content')

<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header portfolio-header parallax section-nav-smooth">
    <div class="container">
      <div class="gradient-bg title-wrap bottom25">
       <div class="row">
         <div class="col-lg-12 col-md-12 whitecolor">
          <h3 class="float-start">Gallery</h3>
          <ul class="breadcrumb top10 bottom10 float-end hoverShine">
            <li class="breadcrumb-item hover-light"><a href="/">Home</a></li>
            <li class="breadcrumb-item hover-light">Gallery</li>
          </ul>
        </div>
       </div>
      </div>
    </div>
 </section>
 <!--Page Header ends -->
<!-- Gallery -->
<section id="gallery" class="bglight position-relative padding_top">
  <div class="container">
      <div class="row">
          {{-- <div class="col-md-12 text-center wow fadeIn top15" data-wow-delay="300ms">
              <h2 class="heading bottom45 darkcolor font-light2">Our <span class="font-normal">Gallery</span>
                  <span class="divider-center"></span>
              </h2>
          </div> --}}
          <div class="col-lg-12">
              <div id="grid-mosaic" class="cbp cbp-l-grid-mosaic-flat">
                  <!--Item 1-->
                  @foreach($galleries as $gallery)
                  <div class="cbp-item brand graphics">
                      <img src="{{$gallery->image}}" alt="">
                      <div class="gallery-hvr whitecolor">
                          <div class="center-box">
                              <a href="{{$gallery->image}}" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                              <h4 class="w-100">{{$gallery->title}}</h4>
                          </div>
                      </div>
                  </div>
                  @endforeach
                  
              </div>
              <div class="col-lg-12">
                  <br>
                  <!--Pagination-->
                    {!! $galleries->withQueryString()->links('pagination::bootstrap-5') !!}
                  <br>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Gallery ends -->
 @endsection