<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Gallery;
use App\Models\Setting;
use App\Models\Customer;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id', 'DESC')
        ->where('home', 'Yes')
        ->whereDate('blog_date', '<=' , date('Y-m-d'))
        ->where('status', 'Active')
        ->limit(4)
        ->get();

        $portfolios = Portfolio::orderBy('id', 'DESC')
        ->where('home', 'Yes')
        ->where('status', 'Active')
        ->limit(6)
        ->get();

        $galleries = Gallery::orderBy('id', 'DESC')
        ->where('home', 'Yes')
        ->where('status', 'Active')
        ->limit(6)
        ->get();

        $products = Product::orderBy('id', 'DESC')
        ->where('home', 'Yes')
        ->where('status', 'Active')
        ->limit(4)
        ->get();

        return view('home.index', compact('blogs', 'portfolios', 'galleries', 'products'));
    }

    public function blog()
    {
        $blogs = Blog::OrderBy('id', 'DESC')
        ->whereDate('blog_date', '<=' , date('Y-m-d'))
        ->where('status', 'Active')
        ->paginate(15);
        return view('home.blog.index', compact('blogs'));
    }

    public function show($id)
    {
        $blogs = Blog::OrderBy('id', 'DESC')->where('status', 'Active')->limit(10)->get();
        $blog = Blog::find($id);
        return view('home.blog.single', compact('blog', 'blogs'));
    }

    //portfolio
    public function portfolio()
    {
       $portfolios = Portfolio::OrderBy('id', 'DESC')
        ->where('status', 'Active')
        ->paginate(15);
        return view('home.portfolio.index', compact('portfolios'));
    }

    public function PortfolioShow($id)
    {
        $portfolios = Portfolio::OrderBy('id', 'DESC')->where('status', 'Active')->limit(10)->get();
        $portfolio = Portfolio::find($id);
        return view('home.portfolio.single', compact('portfolio', 'portfolios'));
    }

    //gallery section
    public function galleryIndex()
    {
        $galleries = Gallery::OrderBy('id', 'DESC')->where('status', 'Active')->paginate(30);
        return view('home.gallery.index', compact('galleries'));
    }

    //contact
    public function contact()
    {
        return view('home.contact');
    }

    public function form1(Request $request)
    {
        $request->validate([
            'arrival'   => ['required', 'max:11', 'date' ],
            'departure' => ['required', 'max:11', 'date'],
            'adult'     => ['required', 'max:10', 'numeric'],
            'room'      => ['required', 'max:50']
        ]);

        $user = [
            'arrival'   => $request->arrival,
            'departure' => $request->departure,
            'adult'     => $request->adult,
            'room'      => $request->room,
        ];

        $user = (object) $user;

        return view('home.contact', compact('user'));
    }

    public function form2(Request $request)
    {
        $request->validate([
            'first_name'=> ['required', 'max:32',],
            'last_name' => ['required', 'max:32',],
            'email'     => ['required', 'max:32', 'email' ],
            'phone'     => ['required', 'max:32',],
            'room'      => ['required', 'max:32',],
            'arrival'   => ['required', 'max:11',],
            'departure' => ['required', 'max:11',],
            'adult'     => ['required', 'max:10', 'numeric'],
            'children'  => ['nulable', 'max:10', 'numeric'],
            'message'   => ['required', 'nullable',]
        ]);

        $user = [
            'first_name'=> $request->first_name,
            'last_name' => $request->last_name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'room'      => $request->room,
            'arrival'   => $request->arrival,
            'departure' => $request->departure,
            'adult'     => $request->adult,
            'children'  => $request->children,
            'message'   => $request->message,
        ];

    //    if(Customer::where('email', $request->email)->first()){
    //      Session::flash('error', 'You already booked to system.');
    //     return redirect()->route('home.contact');
    //    }

        try{

            Customer::store($user);

        } catch (\Exception $e) {

            return $e->getMessage();
        }

        Session::flash('success', 'The booking is successful.');

        return redirect()->route('home.contact');
    }

    public function testMail()
    {
        $data = ['name' => 'My firs Name'];
        MailController::sendMail($data);
    }

}