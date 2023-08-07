<?php

namespace App\Http\Controllers;
use App\Models\Warranty;
use Illuminate\Http\Request;
use App\Models\Product;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $query=
        [
        'title' => $request->title,
      'type' =>$request->type,
      'length' => $request->length,
        'status' =>$request->status,
        'count' =>  $request->count,
         'expire_time' => $request->text,
         'product_id'=> $request->product_id
    ];

   
 // print_r(Warranty::getLastWarranty($query));

  
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
