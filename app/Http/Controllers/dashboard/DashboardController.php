<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Customer;
use View;
use Session;
use File;

class DashboardController extends Controller 
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->setting = Setting::where('status', 'Active')->first();
        View::share('setting', $this->setting);

    }
    public function index()
    {
        return view('dashboard.index');
    }

    public function settings()
    {
        $setting = Setting::where('status', 'Active')->first();
        return view('dashboard.settings', compact('setting'));
    }
    
    //image upload function
    public function upload($image)
    {
        $image_name = rand(100,999).time().'.'.$image->getClientOriginalExtension();
        $path = base_path('public/uploads/settings');
        $image->move($path, $image_name);
        return '/uploads/settings/'.$image_name;
    }

    public function saveSettings(Request $request, string $id)
    {
        $setting = Setting::find($id);
        //existing images
        $exfavicon = public_path($setting->favicon);
        $exlogo    = public_path($setting->logo);
        $exlogo_transparent = public_path($setting->logo_transparent);
        $exbanner  = public_path($setting->banner);
        $exabout_image = public_path($setting->about_image);
        $exbg1     = public_path($setting->bg1);
        $exbg2     = public_path($setting->bg2);
        $exbg3     = public_path($setting->bg3);
        $exfooter_logo = public_path($setting->footer_logo);

        $request->validate([
            'title'      => ['max:255'],
            'favicon'    => ['mimes:png,ico', 'max:30'],
            'meta'       => ['nullable'],
            'logo'       => ['mimes:jpg,jpeg,png,gif', 'max:150'],
            'logo_transparent' => ['mimes:jpg,jpeg,png,gif', 'max:150'],
            'logo_width' => ['nullable'],
            'banner_image' => ['mimes:jpg,jpeg,png,gif', 'max:1000'],
            'about_title' => ['nullable'],
            'about_image' => ['mimes:jpg,jpeg,png,gif', 'max:500'],
            'about_text'  => ['nullable'],
            'bg1' => ['mimes:jpg,jpeg,png,gif', 'max:1000'],
            'bg2' => ['mimes:jpg,jpeg,png,gif', 'max:1000'],
            'bg3' => ['mimes:jpg,jpeg,png,gif', 'max:1000'],
            'footer_logo' => ['mimes:jpg,jpeg,png,gif', 'max:150'],
            'address' => ['nullable'],
            'phone'   => ['max:18'],
            'email'   => ['max:50', 'email'],
            'facebook' => ['max:255', 'url', 'nullable'],
            'twitter' => ['max:255', 'url', 'nullable'],
            'linkedin' => ['max:255', 'url', 'nullable'],
            'instagram' => ['max:255', 'url', 'nullable'],
            'youtube' => ['max:255', 'url', 'nullable'],
            'footer_right' => ['nullable'],
            'copy_right_text' => ['nullable'],
            'status' => ['max:7'],
        ]);
        
        $setting->banner    = $request->input('banner');
        $setting->about     = $request->input('about');
        $setting->work_process = $request->input('work_process');
        $setting->service   = $request->input('service');
        $setting->product_slider = $request->input('product_slider');
        $setting->portfolio = $request->input('portfolio');
        $setting->gallery   = $request->input('gallery');
        $setting->testimonial = $request->input('testimonial');
        $setting->pricing   = $request->input('pricing');
        $setting->blog      = $request->input('blog');
        $setting->contact   = $request->input('contact');
        $setting->title     = $request->input('title');

        if($request->hasFile('favicon')){
            $setting->favicon = $this->upload($request->file('favicon'));
        }

        $setting->meta = $request->input('meta');

        if($request->hasFile('logo')){
            $setting->logo = $this->upload($request->file('logo'));
        }

        if($request->hasFile('logo_transparent')){
            $setting->logo_transparent = $this->upload($request->file('logo_transparent'));
        }

        if($request->hasFile('banner_image')){
            $setting->banner_image = $this->upload($request->file('banner_image'));
        }

        $setting->about_title = $request->input('about_title');

        if($request->hasFile('about_image')){
            $setting->about_image = $this->upload($request->file('about_image'));
        }

        $setting->about_text = $request->input('about_text');

        if($request->hasFile('bg1')){
            $setting->bg1 = $this->upload($request->file('bg1'));
        }

        if($request->hasFile('bg2')){
            $setting->bg2 = $this->upload($request->file('bg2'));
        }

        if($request->hasFile('bg3')){
            $setting->bg3 = $this->upload($request->file('bg3'));
        }

        if($request->hasFile('footer_logo')){
            $setting->footer_logo = $this->upload($request->file('footer_logo'));
        }

        $setting->logo_width   = $request->input('logo_width');
        $setting->address      = $request->input('address');
        $setting->phone        = $request->input('phone');
        $setting->email        = $request->input('email');
        $setting->facebook     = $request->input('facebook');
        $setting->twitter      = $request->input('twitter');
        $setting->linkedin     = $request->input('linkedin');
        $setting->instagram    = $request->input('instagram');
        $setting->youtube      = $request->input('youtube');
        $setting->footer_right = $request->input('footer_right');
        $setting->copy_right_text = $request->input('copy_right_text');
        $setting->status       = $request->input('status');
        $setting->save();

        //delete existing images
        if($request->hasFile('favicon')){
            File::delete($exfavicon);
        }
        if($request->hasFile('logo')){
            File::delete($exlogo);
        }
        if($request->hasFile('logo_transparent')){
            File::delete($exlogo_transparent);
        }
        if($request->hasFile('banner')){
            File::delete($exbanner);
        }
        if($request->hasFile('about_image')){
            File::delete($exabout_image);
        }
        if($request->hasFile('bg1')){
            File::delete($exbg1);
        }
        if($request->hasFile('bg2')){
            File::delete($exbg2);
        }
        if($request->hasFile('bg3')){
            File::delete($exbg3);
        }
        if($request->hasFile('footer_logo')){
            File::delete($exfooter_logo);
        }

        Session::flash('success', 'Setting successfully changed.');

        return redirect()->route('settings');
    }

    public function customerIndex()
    {
        $customers = Customer::OrderBy('id', 'DESC')->paginate(25);
        return view('dashboard.customer.view', compact('customers'));
    }
}