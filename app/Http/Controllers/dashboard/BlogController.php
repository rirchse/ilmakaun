<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;
use File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::OrderBy('id', 'DESC')->paginate(25);
        return view('dashboard.blog.view', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'blog_title' => ['required'],
            'blog_date' => ['required'],
            'blog_details' => ['required'],
            'home' => ['max:3'],
            'status' => ['max:7'],
            'blog_image' => ['mimes:jpg,jpeg,png,gif', 'max:1000'],
        ]);

        if($request->hasFile('blog_image')){
            $image = $request->file('blog_image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $path = base_path('public/uploads/blog');
            $image->move($path, $image_name);
            $blog_image = '/uploads/blog/'.$image_name;
        }

        $blog = new Blog;
        $blog->blog_title = $request->blog_title;
        $blog->blog_date = date('Y-m-d', strtotime($request->blog_date));
        $blog->blog_image = $blog_image ?? '';
        $blog->blog_details = $request->blog_details;
        $blog->status = $request->status ?? 'Deactive';
        $blog->home = $request->home ?? 'No';
        $blog->save();

        Session::flash('success', 'New blog successfully created.');

        return redirect()->route('blog.create');
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
        $blog = Blog::find($id);
        return view('dashboard.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $blog = Blog::find($id);
        $exist_image = public_path($blog->blog_image);

        $request->validate([
            'blog_title' => ['required'],
            'blog_date' => ['required'],
            'blog_details' => ['required'],
            'home' => ['max:3'],
            'status' => ['max:7'],
            'blog_image' => ['mimes:jpg,jpeg,png,gif', 'max:1000'],
        ]);
        
        //update blog details
        $blog->blog_title   = $request->input('blog_title');
        $blog->blog_date    = $request->input('blog_date')? date('Y-m-d', strtotime($request->input('blog_date'))) : date('Y-m-d');
        $blog->blog_details = $request->input('blog_details');
        $blog->status = $request->input('status') ?? 'Deactive';
        $blog->home = $request->input('home') ?? 'No';

        if($request->hasFile('blog_image')) {
            $image = $request->file('blog_image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $path = base_path('public/uploads/blog');
            $image->move($path, $image_name);
            $blog_image = '/uploads/blog/'.$image_name;
            $blog->blog_image   = $blog_image;
        }

        $blog->save();

        //delete existing image
        if($request->hasFile('blog_image') && File::exists($exist_image)){
            File::delete($exist_image);
        }

        Session::flash('success', 'The blog successfully updated.');

        return redirect()->route('blog.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $ex_image = public_path($blog->blog_image);
        if(File::exists($ex_image)) {
            File::delete($ex_image);
        }
        $blog->delete();

        Session::flash('success', 'The blog successfully deleted.');
        return redirect()->route('blog.index');
    }
}
