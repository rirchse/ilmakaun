@extends('home')
@section('title', 'Home')
@section('content')

@if($setting->banner)
<!--slider-->
<section id="home" class="position-relative">
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-dark" data-alias="classic4export" data-source="gallery">
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="rev_main" class="rev_slider fullwidthabanner white" data-version="5.4.1">
            <ul>
                <!-- SLIDE 1 -->
                <li data-index="rs-01" data-transition="fade" data-slotamount="default" data-easein="Power100.easeIn" data-easeout="Power100.easeOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="01">
                    <!-- MAIN IMAGE -->
                    <img src="{{$setting->banner_image}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--slider end-->
@endif
@if($setting->contact)
<!-- Contact US -->
<section id="stayconnect" class="position-relative" style="left:0;right:0;">
    <div class="container">
        <div class="contactus-wrapp" style="margin-top:-130px; margin-bottom: 30px; background: rgba(0,0,0,0.5)">
            <div class="row">
                <!-- <div class="col-md-12 col-sm-12">
                    <div class="heading-title wow fadeInUp text-center text-md-start" data-wow-delay="300ms">
                        <h3 class="darkcolor bottom20">Stay Connected</h3>
                    </div>
                </div> -->
                <div class="col-md-12 col-sm-12">
                    <form action="{{route('home.contactForm')}}" method="POST" class="getin_form wow fadeInUp" data-wow-delay="400ms">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12" id="result">
                                @include('partials.message')
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="arive" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Arrival:" required id="arive" name="arrival" onfocus="(this.type='date')" onblur="(this.type='text')">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="depart" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Departure:"  id="depart" name="departure" onfocus="(this.type='date')" onblur="(this.type='text')">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <label for="adult" class="d-none"></label>
                                    <select class="form-control" type="adult" required id="adult" name="adult">
                                        <option value="">Adults</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <label for="room" class="d-none"></label>
                                    <select class="form-control" type="room" required id="room" name="room">
                                        <option value="">Accomodation</option>
                                            <optgroup label="Cottage Room">
                                                <option value="Cottage Room Double Resident">Double Resident</option>
                                            <option value="Cottage Room Double Non Resident">Double Non Resident</option>
                                            <option value="Cottage Room Single Resident">Single Resident</option>
                                            <option value="Cottage Room Single Non Resident">Single Non Resident</option>
                                        </optgroup>
                                        <optgroup label="Tent Room">
                                            <option value="Tent Room Double Resident">Double Resident</option>
                                            <option value="Tent Room Double Non Resident">Double Non Resident</option>
                                            <option value="Tent Room Single Resident">Single Resident</option>
                                            <option value="Tent Room Single Non Resident">Single Non Resident</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <button type="submit" class="button gradient-btn w-100" id="submit_btn" style="border-radius:0">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact US ends -->
@endif
@if($setting->about)
<!--Some Feature -->
<section id="about" class="single-feature padding_bottom padding_top_half mt-1 mt-lg-n4 mt-md-n3">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-7 col-sm-7 text-sm-start text-center wow fadeInLeft" data-wow-delay="300ms">
                <div class="heading-title mb-4">
                    <h2 class="darkcolor font-normal bottom30" style="font-size:36px"> About <span class="defaultcolor"> {{$setting->about_title}}</span></h2>
                </div>
                <p class="bottom35">{!!$setting->about_text!!}</p>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
                <div class="image"><img alt="SEO" src="{{$setting->about_image? $setting->about_image:'images/about.png'}}"></div>
            </div>
        </div>
    </div>
</section>
<!--Some Feature ends-->
@endif
@if($setting->work_process)
<!-- WOrk Process-->
<section id="our-process" class="padding" style="background:url({{$setting->bg1?$setting->bg1:'/images/testimonial-bg.jpg'}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="heading-title whitecolor wow fadeInUp" data-wow-delay="300ms">
                    <h2 class="fw-normal">Our Work Process </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="process-wrapp">
                <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                    <span class="pro-step bottom20">01</span>
                    <p class="fontbold bottom25">Concept</p>
                    <p class="mt-n2 mt-sm-0">Quisque tellus risus, adipisci viverra bibendum urna.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="400ms">
                    <span class="pro-step bottom20">02</span>
                    <p class="fontbold bottom25">Plan</p>
                    <p class="mt-n2 mt-sm-0">Quisque tellus risus, adipisci viverra bibendum urna.</p>
                </li>
                <li class="whitecolor wow fadeIn active" data-wow-delay="500ms">
                    <span class="pro-step bottom20">03</span>
                    <p class="fontbold bottom25">Design</p>
                    <p class="mt-n2 mt-sm-0">Quisque tellus risus, adipisci viverra bibendum urna.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="600ms">
                    <span class="pro-step bottom20">04</span>
                    <p class="fontbold bottom25">Development</p>
                    <p class="mt-n2 mt-sm-0">Quisque tellus risus, adipisci viverra bibendum urna.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="700ms">
                    <span class="pro-step bottom20">05</span>
                    <p class="fontbold bottom25">Quality Check</p>
                    <p class="mt-n2 mt-sm-0">Quisque tellus risus, adipisci viverra bibendum urna.</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Work Process ends-->
@endif
@if($setting->service)
<!-- Our Services -->  
<section id="services" class="bglight padding" style="background:url({{$setting->bg2?$setting->bg2:''}});">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="heading-title bottom30 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <h2 class="darkcolor font-normal text-center">Services</h2>
                </div>
            </div>
        </div>
       <div id="blog-measonry" class="cbp top25">
          <div class="cbp-item service-item shadow">
             <div class="news_item">
                <a class="image" href="">
                    <img src="/images/software-development.png" alt="" class="img-responsive">
                </a>
                <div class="news_desc">
                    <h3 class="text-capitalize font-normal darkcolor"><a href="#">Software & System Development</a></h3>
                </div>
             </div>
          </div>
          <div class="cbp-item service-item shadow">
             <div class="news_item shadow">
                <a class="image" href="">
                    <img src="/images/app-development.png" alt="" class="img-responsive">
                </a>
                <div class="news_desc">
                   <h3 class="text-capitalize font-normal darkcolor"><a href="#">App Development</a></h3>
                </div>
             </div>
          </div>
          <div class="cbp-item service-item shadow">
             <div class="news_item shadow">
                <a class="image" href="">
                    <img src="/images/web-design.png" alt="" class="img-responsive">
                </a>
                <div class="news_desc">
                   <h3 class="text-capitalize font-normal darkcolor"><a href="#">Website Design & Development</a></h3>
                </div>
             </div>
          </div>
          <div class="cbp-item service-item shadow">
             <div class="news_item shadow">
                <a class="image" href="">
                    <img src="/images/web-hosting.png" alt="" class="img-responsive">
                </a>
                <div class="news_desc">
                   <h3 class="text-capitalize font-normal darkcolor"><a href="#">Domain & Hosting</a></h3>
                </div>
             </div>
          </div>
          <div class="cbp-item service-item shadow">
             <div class="news_item shadow">
                <a class="image" href="">
                    <img src="/images/bpo-support.png" alt="" class="img-responsive">
                </a>
                <div class="news_desc">
                   <h3 class="text-capitalize font-normal darkcolor"><a href="#">BPO Support</a></h3>
                </div>
             </div>
          </div>
          <div class="cbp-item service-item shadow">
             <div class="news_item shadow">
                <a class="image" href="">
                    <img src="/images/online-marketing.png" alt="" class="img-responsive">
                </a>
                <div class="news_desc">
                   <h3 class="text-capitalize font-normal darkcolor"><a href="#">Online Marketing</a></h3>
                </div>
             </div>
          </div>
          <div class="cbp-item service-item shadow">
             <div class="news_item shadow">
                <a class="image" href="">
                    <img src="/images/content-development.png" alt="" class="img-responsive">
                </a>
                <div class="news_desc">
                   <h3 class="text-capitalize font-normal darkcolor"><a href="#">Content Development</a></h3>
                </div>
             </div>
          </div>
          <div class="cbp-item service-item shadow">
             <div class="news_item shadow">
                <a class="image" href="">
                    <img src="/images/graphic-design.png" alt="" class="img-responsive">
                </a>
                <div class="news_desc">
                   <h3 class="text-capitalize font-normal darkcolor"><a href="#">Graphic Design</a></h3>
                </div>
             </div>
          </div>
          <div class="cbp-item service-item shadow">
             <div class="news_item shadow">
                <a class="image" href="">
                    <img src="/images/ux-ui-design.png" alt="" class="img-responsive">
                </a>
                <div class="news_desc">
                   <h3 class="text-capitalize font-normal darkcolor"><a href="#">UI/UX Design</a></h3>
                </div>
             </div>
          </div>
          <div class="cbp-item service-item shadow">
             <div class="news_item shadow">
                <a class="image" href="">
                    <img src="/images/social-media.png" alt="" class="img-responsive">
                </a>
                <div class="news_desc">
                   <h3 class="text-capitalize font-normal darkcolor"><a href="#">Social Media Management</a></h3>
                </div>
             </div>
          </div>
          <div class="cbp-item service-item shadow">
             <div class="news_item shadow">
                <a class="image" href="">
                    <img src="/images/market-research.png" alt="" class="img-responsive">
                </a>
                <div class="news_desc">
                   <h3 class="text-capitalize font-normal darkcolor"><a href="#">Market Research</a></h3>
                </div>
             </div>
          </div>
          <div class="cbp-item service-item shadow">
             <div class="news_item shadow">
                <a class="image" href="">
                    <img src="/images/white-level.png" alt="" class="img-responsive">
                </a>
                <div class="news_desc">
                   <h3 class="text-capitalize font-normal darkcolor"><a href="#">White Label Solution</a></h3>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!--Our Services Ends-->
<!-- Mobile Apps -->
@endif
@if($setting->product_slider)
<!-- Our Team-->
<section id="product_slider" class="padding_top half-section-alt teams-border">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="heading-title heading_space wow fadeInUp" data-wow-delay="300ms">
                    <!-- <span class="defaultcolor text-center text-md-start">Quisque tellus risus, adipisci</span> -->
                    <h2 class="darkcolor font-normal text-md-start" style="text-align: center!important">Accomodation</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="ourteam-slider" class="owl-carousel">
                    @foreach($products as $product)
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="{{$product->image}}" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">{{$product->title}}</h4>
                                <p>Resident Price: <span style="width:50%">KSH{{$product->resident}}</span>
                                </p>
                                <p>Non Resident Price: <span style="width:50%">${{$product->non_resident}}</span></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Team ends-->
@endif
@if($setting->portfolio)
<section id="portfolio" class="padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="heading-title bottom30 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <h2 class="darkcolor font-normal text-center">Portfolio</h2>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center" id="app-feature">
            @foreach($portfolios as $portfolio)
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="cbp-item shadow">
                    <div class="news_item">
                       <a class="image" href="{{ route('home.portfolio.show', $portfolio->id)}}">
                           <img src="{{$portfolio->image}}" alt="" class="img-responsive">
                       </a>
                    </div>
                 </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="heading-title bottom30 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;text-align:center;">
                    <a href="{{ route('home.portfolio') }}" class="button btnsecondary gradient-btn  mb-sm-0 mb-4">View More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Mobile Apps ends-->
@endif
@if($setting->gallery)
<!-- Gallery -->
<section id="gallery" class="bglight position-relative padding_top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn top15" data-wow-delay="300ms">
                <h2 class="heading bottom45 darkcolor font-light2">Photo <span class="font-normal">Gallery</span>
                    <span class="divider-center"></span>
                </h2>
            </div>
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
                    <div class="cbp-l-loadMore-button ">
                        <a href="{{route('home.gallery')}}" class="cbp-l-loadMore-link button py-1 button gradient-btn whitecolor transition-3" rel="nofollow">VIEW MORE</a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallery ends -->
@endif
@if($setting->testimonial)
<!-- Testimonials -->
<section id="our-testimonial" class="bglight padding_bottom">
    <div class="parallax page-header testimonial-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 col-md-12 text-center text-lg-end">
                    <div class="heading-title wow fadeInUp padding_testi" data-wow-delay="300ms">
                        <span class="whitecolor">Quisque tellus risus, adipisci</span>
                        <h2 class="whitecolor font-normal">What People Say</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="owl-carousel" id="testimonial-slider">
            <!--item 1-->
            <div class="item testi-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="images/testimonial-1.jpg" alt="">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#.">John Smith</a></h4>
                        <p>UPWORK, New York</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-start text-center">
                        <p class="bottom15 top90">We have a number of different teams within our agency that specialise in different areas of business so you can be sure that you won’t receive a generic service and although we boast a years and years of service.</p>
                        <span class="d-inline-block test-star">
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                </span>
                    </div>
                </div>
            </div>
            <!--item 2-->
            <div class="item testi-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="images/testimonial-2.jpg" alt="">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#.">Hayden Wood</a></h4>
                        <p>FIVERR, Italy</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-start text-center">
                        <p class="bottom15 top90">Trax’s customer testimonial page is another beauty. Its simple design focuses on videos and standout quotes from customers. This approach is clean, straightforward, text that can be overwhelming and easy to skip.</p>
                        <span class="d-inline-block test-star">
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <i class="far fa-star"></i>
                                </span>
                    </div>
                </div>
            </div>
            <!--item 3-->
            <div class="item testi-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="images/testimonial-3.jpg" alt="">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#.">Kevin Miller</a></h4>
                        <p>ENVATO, Australia</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-start text-center">
                        <p class="bottom15 top90">Trax is a company that provides tools to help professional event planning and execution, and their customers are very happy folks! The thing I love about their customer testimonial page provides content formats.</p>
                        <span class="d-inline-block test-star">
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                </span>
                    </div>
                </div>
            </div>
            <!--item 4-->
            <div class="item testi-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="images/testimonial-4.jpg" alt="">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#.">Alina Johanson</a></h4>
                        <p>INTEL, Sidney</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-start text-center">
                        <p class="bottom15 top90">Startup Institute is a career accelerator that allows professionals to learn new skills, take their careers in a different direction, and pursue a career they are passionate about that have completed the program.</p>
                        <span class="d-inline-block test-star">
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <i class="far fa-star"></i>
                                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--testimonials end-->
@endif
@if($setting->pricing)
<!--Pricing Start-->
<section id="pricing" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn" data-wow-delay="300ms">
                <h2 class="heading darkcolor font-light2"><span class="font-weight-light">Best</span> Pricing
                    <span class="divider-center"></span>
                </h2>
            </div>
            <div class="col-12 text-center">
                <div class="price-toggle-wrapper heading_space top30">
                    <span class="Pricing-toggle-button month active">Monthly</span>
                    <span class="Pricing-toggle-button year">Yearly</span>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme" id="price-slider">
            <div class="item">
                <div class="col-md-12">
                    <div class="pricing-item wow fadeInUp animated sale top5" data-wow-delay="300ms" data-sale="60">
                        <h3 class="font-light darkcolor">Basic</h3>
                        <p class="bottom30">The standard version</p>
                        <div class="pricing-price darkcolor"><span class="pricing-currency">$9.95</span> /<span class="pricing-duration">month</span></div>
                        <ul class="pricing-list">
                            <li>Support forum</li>
                            <li>Free hosting</li>
                            <li class="price-not">40MB of storage space</li>
                            <li class="price-not">Social media integration</li>
                            <li class="price-not">10GB of storage space</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose plan</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-12">
                    <div class="pricing-item sale wow fadeInUp animated top5" data-wow-delay="380ms" data-sale="40">
                        <h3 class="font-light darkcolor">Popular</h3>
                        <p class="bottom30">The standard version</p>
                        <div class="pricing-price darkcolor"><span class="pricing-currency">$19.95</span> /<span class="pricing-duration">month</span></div>
                        <ul class="pricing-list">
                            <li>Support forum</li>
                            <li>Free hosting</li>
                            <li>40MB of storage space</li>
                            <li class="price-not">Social media integration</li>
                            <li class="price-not">10GB of storage space</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose plan</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-12">
                    <div class="pricing-item wow fadeInUp animated sale top5" data-wow-delay="460ms" data-sale="30">
                        <h3 class="font-light darkcolor">Enterprise</h3>
                        <p class="bottom30">The standard version</p>
                        <div class="pricing-price darkcolor"><span class="pricing-currency">$29.95</span> /<span class="pricing-duration">month</span></div>
                        <ul class="pricing-list">
                            <li>Support forum</li>
                            <li>Free hosting</li>
                            <li>40MB of storage space</li>
                            <li>Social media integration</li>
                            <li class="price-not">10GB of storage space</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose plan</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-12">
                    <div class="pricing-item wow fadeInUp animated sale top5" data-wow-deeay="400ms" data-sale="20">
                        <h3 class="font-light darkcolor">Ultimate</h3>
                        <p class="bottom30">The standard version</p>
                        <div class="pricing-price darkcolor"><span class="pricing-currency">$49.95</span> /<span class="pricing-duration">month</span></div>
                        <ul class="pricing-list">
                            <li>Support forum</li>
                            <li>Free hosting</li>
                            <li>40MB of storage space</li>
                            <li>Social media integration</li>
                            <li>10GB of storage space</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Pricing ends-->
@endif
@if($setting->blog)
<!-- Our blogs -->
<section id="blog" class="teams-border padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
                    <span class="defaultcolor text-center "></span>
                    <h2 class="darkcolor font-normal bottom30 text-center ">Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="ourteam-slider" class="owl-carousel">
                    @foreach($blogs as $blog)
                    <div class="item shadow" style="padding:15px">
                        <div class="team-box">
                            <div class="image">
                                <a href="{{route('home.blog.show', $blog->id)}}">
                                    <img src="{{$blog->blog_image ? $blog->blog_image : '/images/blog-image.jpg'}}" alt="">
                                </a>
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">
                                    <a href="{{route('home.blog.show', $blog->id)}}">{{$blog->blog_title}}</a></h4>
                                <p><a href="{{route('home.blog.show', $blog->id)}}">Read more...</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div><br>
            </div>
        </div>
    </div>
</section>
<!-- Our Blogs ends-->
@endif
<section id="gmap" class="">
    {{-- <div class="container"> --}}
        <div class="row">
            {{-- <div class="col-md-12"> --}}
                <a target="_blank" href="https://www.google.com/maps/place/1%C2%B039'02.9%22S+35%C2%B021'49.8%22E/@-1.653272,35.3606021,13.37z/data=!4m4!3m3!8m2!3d-1.6508056!4d35.3638333?entry=ttu">
                    <img src="/home/images/google_map.png" alt="" style="width:100%">
                </a>
            {{-- </div> --}}
        </div>
    {{-- </div> --}}
</div>
@endsection