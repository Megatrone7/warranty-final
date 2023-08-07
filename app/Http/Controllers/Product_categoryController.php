<?php

namespace App\Http\Controllers;

use App\Models\Product_category;
use Illuminate\Http\Request;

class Product_categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Product_category::all();
        return view('panel.product_categories.list',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.product_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $query=[

            'title'=>$request->title,
        ];
        Product_category::create($query);
        return redirect(route('category.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product_category $product_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product_category $product_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product_category $product_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = Product_category::find($id);
       
        $user->delete();

        return redirect()->route('category.index');
    }
}
