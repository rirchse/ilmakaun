<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::OrderBy('id', 'DESC')->paginate(25);
        return view('dashboard.product.view', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'    => ['required'],
            'resident' => ['required'],
            'non_resident' => ['required'],
            'details'  => ['required'],
            'home'     => ['max:3'],
            'status'   => ['max:7'],
            'image'    => ['mimes:jpg,jpeg,png,gif', 'max:1000'],
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $path = base_path('public/uploads/product');
            $image->move($path, $image_name);
            $image = '/uploads/product/'.$image_name;
        }

        $product = new Product;
        $product->title = $request->title;
        $product->resident = $request->resident;
        $product->non_resident = $request->non_resident;
        $product->image = $image ?? '';
        $product->details = $request->details;
        $product->status = $request->status ?? 'Deactive';
        $product->home = $request->home ?? 'No';
        $product->save();

        Session::flash('success', 'New Product successfully created.');

        return redirect()->route('product.create');
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
        $product = Product::find($id);
        return view('dashboard.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $product = Product::find($id);
        $exist_image = public_path($product->image);

        $request->validate([
            'title'    => ['required'],
            'resident' => ['required'],
            'non_resident' => ['required'],
            'details'  => ['required'],
            'home'     => ['max:3'],
            'status'   => ['max:7'],
            'image'    => ['mimes:jpg,jpeg,png,gif', 'max:1000'],
        ]);
        
        //update product details
        $product->title   = $request->input('title');
        $product->resident   = $request->input('resident');
        $product->non_resident   = $request->input('non_resident');
        $product->details = $request->input('details');
        $product->status  = $request->input('status') ?? 'Deactive';
        $product->home    = $request->input('home') ?? 'No';

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $path = base_path('public/uploads/product');
            $image->move($path, $image_name);
            $image = '/uploads/product/'.$image_name;
            $product->image   = $image;
        }

        $product->save();

        //delete product existing image
        if($request->hasFile('image') && File::exists($exist_image)){
            File::delete($exist_image);
        }

        Session::flash('success', 'The Product successfully updated.');

        return redirect()->route('product.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $ex_image = public_path($product->image);
        if(File::exists($ex_image)) {
            File::delete($ex_image);
        }
        $product->delete();

        Session::flash('success', 'The Product successfully deleted.');
        return redirect()->route('product.index');
    }
}
