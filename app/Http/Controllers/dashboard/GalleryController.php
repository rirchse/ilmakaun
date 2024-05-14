<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;
use File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::OrderBy('id', 'DESC')->paginate(25);
        return view('dashboard.gallery.view', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['nullable'],
            'details' => ['nullable'],
            'home' => ['max:3'],
            'status' => ['max:7'],
            'image' => ['mimes:jpg,jpeg,png,gif', 'max:1000'],
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $path = base_path('public/uploads/gallery');
            $image->move($path, $image_name);
            $image = '/uploads/gallery/'.$image_name;
        }

        $gallery = new Gallery;
        $gallery->title = $request->title;
        $gallery->image = $image ?? '';
        $gallery->details = $request->details;
        $gallery->status = $request->status ?? 'Deactive';
        $gallery->home = $request->home ?? 'No';
        $gallery->save();

        Session::flash('success', 'New Gallery successfully created.');

        return redirect()->route('gallery.create');
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
        $gallery = Gallery::find($id);
        return view('dashboard.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $gallery = Gallery::find($id);
        $exist_image = public_path($gallery->image);

        $request->validate([
            'title' => ['nullable'],
            'details' => ['nullable'],
            'home' => ['max:3'],
            'status' => ['max:7'],
            'image' => ['mimes:jpg,jpeg,png,gif', 'max:1000'],
        ]);
        
        //update Gallery details
        $gallery->title   = $request->input('title');
        $gallery->details = $request->input('details');
        $gallery->status = $request->input('status') ?? 'Deactive';
        $gallery->home = $request->input('home') ?? 'No';

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $path = base_path('public/uploads/gallery');
            $image->move($path, $image_name);
            $image = '/uploads/gallery/'.$image_name;
            $gallery->image   = $image;
        }

        $gallery->save();

        //delete Gallery existing image
        if($request->hasFile('image') && File::exists($exist_image)){
            File::delete($exist_image);
        }

        Session::flash('success', 'The Gallery successfully updated.');

        return redirect()->route('gallery.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::find($id);
        $ex_image = public_path($gallery->image);
        if(File::exists($ex_image)) {
            File::delete($ex_image);
        }
        $gallery->delete();

        Session::flash('success', 'The Gallery successfully deleted.');
        return redirect()->route('gallery.index');
    }
}
