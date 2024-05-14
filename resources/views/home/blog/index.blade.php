@extends('home')
@section('title', 'Blog')
@section('content')

<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header blog-header parallax section-nav-smooth">
    <div class="container">
      <div class="gradient-bg title-wrap bottom25">
       <div class="row">
         <div class="col-lg-12 col-md-12 whitecolor">
          <h3 class="float-start">Blog</h3>
          <ul class="breadcrumb top10 bottom10 float-end hoverShine">
            <li class="breadcrumb-item hover-light"><a href="/">Home</a></li>
            <li class="breadcrumb-item hover-light">Blog</li>
          </ul>
        </div>
       </div>
      </div>
    </div>
 </section>
 <!--Page Header ends -->
 
<!-- Our Blogs -->
<section id="our-blog" class="bglight padding">
    <div class="container">
       <div id="blog-measonry" class="cbp top25">
        @foreach($blogs as $blog)
          <div class="cbp-item">
             <div class="news_item shadow">
                <a class="image" href="{{ route('home.blog.show', $blog->id) }}">
                   <img src="{{ $blog->blog_image }}" alt="" class="img-responsive">
                </a>
                <div class="news_desc">
                   <h3 class="text-capitalize font-normal darkcolor"><a href="{{ route('home.blog.show', $blog->id) }}">{{ $blog->blog_title }}</a></h3>
                   <ul class="meta-tags top20 bottom20">
                      <li><a href="#"><i class="fas fa-calendar-alt"></i>{{ $blog->blog_date }}</a></li>
                   </ul>
                   <p class="bottom35">{!! substr($blog->blog_details, 0, 250) !!}{{strlen($blog->blog_details) > 250 ? '...' : ''}}</p>
                   <a href="{{ route('home.blog.show', $blog->id) }}" class="button gradient-btn">Read more</a>
                </div>
             </div>
          </div>
          @endforeach
          
       </div>
       <div class="row">
          <div class="col-sm-12">
             <!--Pagination-->
               {!! $blogs->withQueryString()->links('pagination::bootstrap-5') !!}
          </div>
       </div>
    </div>
 </section>
 <!--Our Blogs Ends-->
 @endsection