@extends('dashboard')
@section('title', 'Update Settings')
@section('content')

<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Settings</h4>
</div><!-- d-flex -->

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10" >Edit Home Page Settings</h6>
        <br>

        <div class="col-md-12 whitebox">
            <div class="widget logincontainer">
                <form class="getin_form border-form" id="login" action="{{ route('saveSettings', $setting->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <h6>Enable/Disable Sections:</h6>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <ul style="list-style:none">
                                <li>
                                    <label for="banner" class="label">
                                        <input type="checkbox" id="banner" name="banner" value="Yes" {{$setting->banner == 'Yes'? 'checked':''}}> Enable/Disable Banner section
                                    </label>
                                </li>
                                <li>
                                    <label for="about" class="label">
                                        <input type="checkbox" id="about" name="about" value="Yes" {{$setting->about == 'Yes'? 'checked':''}}> Enable/Disable About section
                                    </label>
                                </li>
                                <li>
                                    <label for="work_process" class="label">
                                        <input type="checkbox" id="work_process" name="work_process" value="Yes" {{$setting->work_process == 'Yes'? 'checked':''}}> Enable/Disable Work Process
                                    </label>
                                </li>
                                <li>
                                    <label for="service" class="label">
                                        <input type="checkbox" id="service" name="service" value="Yes" {{$setting->service == 'Yes'? 'checked':''}}> Enable/Disable Services
                                    </label>
                                </li>
                                <li>
                                    <label for="product_slider" class="label">
                                        <input type="checkbox" id="product_slider" name="product_slider" value="Yes" {{$setting->product_slider == 'Yes'? 'checked':''}}> Enable/Disable Accomodation
                                    </label>
                                </li>
                                <li>
                                    <label for="protfolio" class="label">
                                        <input type="checkbox" id="protfolio" name="portfolio" value="Yes" {{$setting->portfolio == 'Yes'? 'checked':''}}> Enable/Disable Portfolio Section
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <ul style="list-style:none">
                                <li>
                                    <label for="gallery" class="label">
                                        <input type="checkbox" id="gallery" name="gallery" value="Yes" {{$setting->gallery == 'Yes'? 'checked':''}}> Enable/Disable Gallery Section
                                    </label>
                                </li>
                                <li>
                                    <label for="testimonial" class="label">
                                        <input type="checkbox" id="testimonial" name="testimonial" value="Yes" {{$setting->testimonial == 'Yes'? 'checked':''}}> Enable/Disable Testimonial section
                                    </label>
                                </li>
                                <li>
                                    <label for="pricing" class="label">
                                        <input type="checkbox" id="pricing" name="pricing" value="Yes" {{$setting->pricing == 'Yes'? 'checked':''}}> Enable/Disable Pricing section
                                    </label>
                                </li>
                                <li>
                                    <label for="blog" class="label">
                                        <input type="checkbox" id="blog" name="blog" value="Yes" {{$setting->blog == 'Yes'? 'checked':''}}> Enable/Disable Blog section
                                    </label>
                                </li>
                                <li>
                                    <label for="contact" class="label">
                                        <input type="checkbox" id="contact" name="contact" value="Yes" {{$setting->contact == 'Yes'? 'checked':''}}> Enable/Disable Contact section
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group bottom35">
                                <label for="title" class="label label-info">Webiste Title</label>
                                <input class="form-control" type="text" placeholder="Website Title:" id="title" name="title" value="{{ $setting->title }}">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group bottom35">
                                <label for="meta" class="label">Meta Description:</label>
                                <textarea class="form-control" placeholder="Meta Description:" id="meta" name="meta" rows="5">{{ $setting->meta }}</textarea>
                            </div>
                            <div class="form-group bottom35">
                                <label for="favicon" class="">Favicon Icon</label>
                                <input class="form-control" type="file" placeholder="Favicon Icon:" id="favicon" name="favicon">
                                <label style="color:red">Favicon Icon size (30px X 30px)</label>
                            </div>
                            <img src="{{$setting->favicon}}" alt="" style="width:100%;max-width:100px;margin-bottom:15px">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group bottom35">
                                <label for="logo" class="">Logo</label>
                                <input class="form-control" type="file" placeholder="Logo:" id="logo" name="logo">
                                <label style="color:red">Logo height (40px)</label>
                            </div>
                            <img src="{{$setting->logo}}" alt="" style="height:40px;margin-bottom:15px">
                            
                            <div class="form-group bottom35">
                                <label for="image" class="">Logo Transparent</label>
                                <input class="form-control" type="file" placeholder="Logo Transparent:" id="image" name="logo_transparent">
                                <label style="color:red">Logo Transparent size (160px X 40px)</label>
                            </div>
                            <img src="{{$setting->logo_transparent}}" alt="" style="width:100%;max-width:200px;margin-bottom:15px">
                            <div class="form-group">
                                <label for="logo-width" class="">Logo  Width Customize </label>
                                <input class="form-control" type="text" placeholder="Logo width:" id="logo-width" value="{{$setting->logo_width}}" name="logo_width">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group bottom35">
                                <label for="image" class="">Banner</label>
                                <input class="form-control" type="file" placeholder="Banner:" id="image" name="banner_image">
                                <label style="color:red">Banner size (1920px X 900px)</label>
                            </div>
                            <img src="{{$setting->banner_image}}" alt="" style="width:100%;max-width:100%;margin-bottom:15px">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group bottom35">
                                <label for="title" class="label">About Title</label>
                                <input class="form-control" type="text" placeholder="About Title:" id="about_title" name="about_title" value="{{ $setting->about_title }}">
                            </div>
                            <div class="form-group bottom35">
                                <label for="image" class="">About Image</label>
                                <input class="form-control" type="file" placeholder="About Image:" id="image" name="about_image">
                                <label style="color:red">About Image size (453px X 370px)</label>
                            </div>
                            <img src="{{$setting->about_image}}" alt="" style="width:100%;max-width:300px;margin-bottom:15px">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group bottom35">
                                <label for="about" class="label">About Text</label>
                                <textarea class="form-control" placeholder="About Text:" id="about_text" name="about_text" rows="5">{{ $setting->about_text }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group bottom35">
                                <label for="bg1" class="">Work Process Background Image:</label>
                                <input class="form-control" type="file" placeholder="Background Image 1:" id="bg1" name="bg1">
                                <label style="color:red">Work Process Background Image size (1920px X 900px)</label>
                            </div>
                            <img src="{{$setting->bg1}}" alt="" style="width:100%;max-width:600px;margin-bottom:15px">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group bottom35">
                                <label for="bg2" class="">Service Background:</label>
                                <input class="form-control" type="file" placeholder="Service Background Image:" id="bg2" name="bg2">
                                <label style="color:red">Service Background Image Size (1920px X 900px)</label>
                            </div>
                            <img src="{{$setting->bg2}}" alt="" style="width:100%;max-width:600px;margin-bottom:15px">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group bottom35">
                                <label for="bg3" class="">Testimonial Background:</label>
                                <input class="form-control" type="file" placeholder="Testimonial Background Image:" id="bg3" name="bg3">
                                <label style="color:red">Testimonial background image size (1920px X 900px)</label>
                            </div>
                            <img src="{{$setting->bg3}}" alt="" style="width:100%;max-width:600px;margin-bottom:15px">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group bottom35">
                                <label for="footer_logo" class="">Footer Logo:</label>
                                <input class="form-control" type="file" placeholder="Footer Logo:" id="footer_logo" name="footer_logo">
                                <label style="color:red">Footer Logo size (160px X 40px)</label>
                            </div>
                            <img src="{{$setting->footer_logo}}" alt="" style="width:100%;max-width:160px;margin-bottom:15px">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group bottom35">
                                <label for="address" class="label">Address:</label>
                                <textarea class="form-control" placeholder="Address:" id="address" name="address" rows="2">{{ $setting->address }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group bottom35">
                                <label for="phone" class="label">Phone:</label>
                                <input class="form-control" type="numeric" placeholder="Mobile Phone:" id="phone" name="phone" value="{{ $setting->phone }}">
                            </div>
                            <div class="form-group bottom35">
                                <label for="email" class="label">Email Address:</label>
                                <input class="form-control" type="text" placeholder="Email Address:" id="email" name="email" value="{{ $setting->email }}">
                            </div>
                            <div class="form-group bottom35">
                                <label for="facebook" class="Label">Facebook Url:</label>
                                <input class="form-control" type="url" placeholder="Facebook Url:" id="facebook" name="facebook" value="{{ $setting->facebook }}">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group bottom35">
                                <label for="twitter" class="label">Twitter Url:</label>
                                <input class="form-control" type="url" placeholder="Twitter:" id="twitter" name="twitter" value="{{ $setting->twitter }}">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group bottom35">
                                <label for="linkedin" class="label">Linkedin:</label>
                                <input class="form-control" type="url" placeholder="Linkedin:" id="linkedin" name="linkedin" value="{{ $setting->linkedin }}">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group bottom35">
                                <label for="instagram" class="label">Instagram:</label>
                                <input class="form-control" type="url" placeholder="Instagram:" id="instagram" name="instagram" value="{{ $setting->instagram }}">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group bottom35">
                                <label for="youtube" class="label">Youtube Url:</label>
                                <input class="form-control" type="url" placeholder="Youtube Url:" id="youtube" name="youtube" value="{{ $setting->youtube }}">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group bottom35">
                                <label for="details" class="label">Footer right text:</label>
                                <textarea class="form-control" type="text" placeholder="Footer right text:" id="details" name="footer_right">{{ $setting->footer_right }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group bottom35">
                                <label for="copy_right_text" class="label">Copy right text</label>
                                <textarea class="form-control" type="text" placeholder="Copy right text:" id="copy_right_text" name="copy_right_text">{{ $setting->copy_right_text }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="form-group bottom30 ml-1">
                                <div class="form-check text-left">
                                    <label class="form-check-label" for="rememberMe"><input class="form-check-input" {{$setting->status == 'Active'?'checked':''}} type="checkbox" value="Active" name="status" id="rememberMe"> Status</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary" style="position:fixed;right:5%;bottom:15%">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $('#about_text').summernote({height: 350});
    $('#address').summernote({height: 150});
    $('#copy_right_text').summernote({height: 50});
</script>
@endsection