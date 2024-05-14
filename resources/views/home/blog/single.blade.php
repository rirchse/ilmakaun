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
            <li class="breadcrumb-item hover-light"><a href="/blog">Blog</a></li>
          </ul>
        </div>
       </div>
      </div>
    </div>
 </section>
 <!--Page Header ends -->
 
<!-- Our Blogs -->
<section id="our-blog" class="bglight padding_top padding_bottom_half">
   <div class="container">
       <div class="row">
           <div class="col-lg-8 col-md-7">
               <div class="news_item shadow mb-0">
                   <div class="image">
                       <img src="{{ $blog->blog_image }}" alt="" class="img-responsive">
                   </div>
                   <div class="news_desc text-center text-md-start">
                       <h3 class="text-capitalize font-normal darkcolor"><a href="javascript:void(0)">{{ $blog->blog_title }}</a></h3>
                       <ul class="meta-tags top20 bottom20">
                           <li><a href="#."><i class="fas fa-calendar-alt"></i>{{ $blog->blog_date }}</a></li>
                           {{-- <li><a href="#."> <i class="far fa-user"></i>Peter</a></li>
                           <li><a href="#."><i class="far fa-comment-dots"></i>5</a></li> --}}
                       </ul>
                       <p class="bottom35">{!! $blog->blog_details !!}</p>
                       {{-- <div class="profile-authors heading_space">
                           <h4 class="text-capitalize darkcolor bottom35">Comments</h4>
                           <div class="eny_profile bottom30">
                               <div class="profile_photo"><img src="images/team-1.jpg" alt="Comments"> </div>
                               <div class="profile_text bottom0">
                                   <h5 class="darkcolor"><a href="#.">Bankee Moune</a></h5>
                                   <a href="javascript:void(0)" class="readmorebtn font-bold"> <i class="fas fa-reply"></i> Reply</a>
                                   <p class="top10 bottom0">Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise.</p>
                               </div>
                           </div>
                           <div class="eny_profile">
                               <div class="profile_photo"><img src="images/team-3.jpg" alt="Comments"> </div>
                               <div class="profile_text bottom0">
                                   <h5 class="darkcolor"><a href="#.">David Smith</a></h5>
                                   <a href="javascript:void(0)" class="readmorebtn font-bold"> <i class="fas fa-reply"></i> Reply</a>
                                   <p class="top10 bottom0">Keeping your eye on the ball while performing. Podcasting operational change management inside of workflows to establish a framework. </p>
                               </div>
                           </div>
                       </div>
                       <div class="post-comment">
                           <div class="text-center text-md-start">
                               <h4 class="text-capitalize darkcolor heading_space_half">Add Comment</h4>
                           </div>
                           <form class="getin_form" id="post-a-comment">
                               <div class="row">
                                   <div class="col-md-6 col-sm-6">
                                       <div class="form-group bottom35">
                                           <label for="first_name1" class="d-none"></label>
                                           <input class="form-control" type="text" placeholder="Name" required id="first_name1">
                                       </div>
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                       <div class="form-group bottom35">
                                           <label for="email1" class="d-none"></label>
                                           <input class="form-control" type="email" placeholder="Email" required id="email1">
                                       </div>
                                   </div>
                                   <div class="col-md-12 col-sm-12">
                                       <div class="form-group bottom35">
                                           <label for="message" class="d-none"></label>
                                           <textarea class="form-control" placeholder="Message" id="message"></textarea>
                                       </div>
                                   </div>
                                   <div class="col-sm-12 bottom5 text-sm-start text-center">
                                       <button type="submit" class="button gradient-btn">Post Comment</button>
                                   </div>
                               </div>
                           </form>
                       </div> --}}
                   </div>
               </div>
           </div>
           <div class="col-lg-4 col-md-5">
               <aside class="sidebar whitebox mt-5 mt-md-0">
                   {{-- <div class="widget heading_space_half text-center text-md-start">
                       <h4 class="text-capitalize darkcolor bottom20">search By Keyword</h4>
                       <form class="widget_search">
                           <div class="input-group">
                               <label for="searchInput" class="d-none"></label>
                               <input type="search" class="form-control" placeholder="Search..." required id="searchInput">
                               <button type="submit" class="input-group-addon"><i class="fa fa-search"></i> </button>
                           </div>
                       </form>
                   </div> --}}
                   <div class="widget heading_space_half wow fadeIn" data-wow-delay="350ms">
                       <h4 class="text-capitalize darkcolor bottom20 text-center text-md-start">Recent Post</h4>
                       @foreach($blogs as $blog)
                       <div class="single_post d-table bottom15">
                           <a href="{{ route('home.blog.show', $blog->id) }}" class="post"><img src="{{ $blog->blog_image }}" alt=""></a>
                           <div class="text">
                               <a href="{{ route('home.blog.show', $blog->id) }}">{{ $blog->blog_title }}</a>
                               <span>{{ date('M d, Y', strtotime($blog->blog_date)) }}</span>
                           </div>
                       </div>
                       @endforeach
                   </div>
                   {{-- <div class="widget heading_space_half text-center text-md-start">
                       <h4 class="text-capitalize darkcolor bottom20">Categories</h4>
                       <ul class="webcats">
                           <li><a href="#.">web design <span>(20)</span></a></li>
                           <li><a href="#.">network <span>(05)</span></a></li>
                           <li><a href="#.">marketing <span>(11)</span></a></li>
                           <li><a href="#.">event <span>(20)</span></a></li>
                           <li><a href="#.">website <span>(07)</span></a></li>
                           <li><a href="#.">themeforest<span>(19)</span></a></li>
                       </ul>
                   </div> --}}
                   {{-- <div class="widget heading_space_half text-center text-md-start">
                       <h4 class="text-capitalize darkcolor bottom20">Tags</h4>
                       <ul class="webtags">
                           <li><a href="#.">web design</a></li>
                           <li><a href="#.">network</a></li>
                           <li><a href="#.">marketing</a></li>
                           <li><a href="#.">posts</a></li>
                           <li><a href="#.">event</a></li>
                           <li><a href="#.">website</a></li>
                           <li><a href="#.">social</a></li>
                           <li><a href="#.">themeforest</a></li>
                           <li><a href="#.">creative</a></li>
                           <li><a href="#.">best solutions</a></li>
                       </ul>
                   </div> --}}
               </aside>
           </div>
       </div>
   </div>
</section>
<!--Our Blog Ends-->
 @endsection