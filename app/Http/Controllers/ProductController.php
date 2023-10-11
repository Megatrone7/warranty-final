<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Product_category;
use App\Models\Product;
use App\Models\Warranty;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=Product_category::get_catgory();
        $products=Product::all();
        if(Auth::user()->role==1) {
            return view('panel.products.list', compact('category','products'));
        }
        else
        {
          
            
            $id=Auth::user()->id;
            
            $products=Product::where('owner_id', $id)->get(); 
        
            return view('panel.products.list', compact('category','products'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Product_category::all();  
        $warranties = [];
        foreach ($categories as $category) 
        {
            $warranties[$category->title] = Warranty::where('product_category',$category -> id)->where('status',0)->where('owner_id',Auth::user()->id)->count();
        }  
        return view('panel.products.create',compact('categories','warranties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $query=
        [
   'name' => $request->name,
  'description' =>$request->description,
  'id_category' => $request->id_category,
  'warranty_serial' =>$request->warranty_serial,
  'owner_id' =>  $request->owner_id,
  'sale_date' =>  $request->sale_date,
  'owner_id' => Auth::user()->id,
  'product_serial'=>$request->product_serial
    ];
    
    Product::get_create($query);
    return redirect(route('product.index'));
    }

    

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user=Product::find($id);   
      
        return view('panel.products.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product=Product::find($id);
        $product->update($request->all());
      
        return view('panel.products.edit',compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::find($id)->delete($id);

        return redirect()->route('product.index');
    }
}
