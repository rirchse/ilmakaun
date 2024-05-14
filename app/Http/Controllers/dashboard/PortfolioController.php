<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Portfolio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;
use File;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::OrderBy('id', 'DESC')->paginate(25);
        return view('dashboard.portfolio.view', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'details' => ['required'],
            'home' => ['max:3'],
            'status' => ['max:7'],
            'image' => ['mimes:jpg,jpeg,png,gif', 'max:1000'],
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $path = base_path('public/uploads/portfolio');
            $image->move($path, $image_name);
            $image = '/uploads/portfolio/'.$image_name;
        }

        $portfolio = new Portfolio;
        $portfolio->title = $request->title;
        $portfolio->image = $image ?? '';
        $portfolio->details = $request->details;
        $portfolio->status = $request->status ?? 'Deactive';
        $portfolio->home = $request->home ?? 'No';
        $portfolio->save();

        Session::flash('success', 'New portfolio successfully created.');

        return redirect()->route('portfolio.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $portfolio = Portfolio::find($id);
        return view('dashboard.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $portfolio = Portfolio::find($id);
        $exist_image = public_path($portfolio->image);

        $request->validate([
            'title' => ['required'],
            'details' => ['required'],
            'home' => ['max:3'],
            'status' => ['max:7'],
            'image' => ['mimes:jpg,jpeg,png,gif', 'max:1000'],
        ]);
        
        //update portfolio details
        $portfolio->title   = $request->input('title');
        $portfolio->details = $request->input('details');
        $portfolio->status = $request->input('status') ?? 'Deactive';
        $portfolio->home = $request->input('home') ?? 'No';

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $path = base_path('public/uploads/portfolio');
            $image->move($path, $image_name);
            $image = '/uploads/portfolio/'.$image_name;
            $portfolio->image   = $image;
        }

        $portfolio->save();

        //delete portfolio existing image
        if($request->hasFile('image') && File::exists($exist_image)){
            File::delete($exist_image);
        }

        Session::flash('success', 'The portfolio successfully updated.');

        return redirect()->route('portfolio.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::find($id);
        $ex_image = public_path($portfolio->image);
        if(File::exists($ex_image)) {
            File::delete($ex_image);
        }
        $portfolio->delete();

        Session::flash('success', 'The portfolio successfully deleted.');
        return redirect()->route('portfolio.index');
    }
}
