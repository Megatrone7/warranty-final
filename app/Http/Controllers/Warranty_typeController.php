<?php

namespace App\Http\Controllers;

use App\Models\Warranty_type;
use Illuminate\Http\Request;

class Warranty_typeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('warranty_type');
    }

    /**
     * Show the form for creating a new <resource class=""></resource>
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
        $query=[
            'type'=>$request->type,
        ];
        Warranty_type::create($query);
        return redirect(route('warranty_type.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Warranty_type $warranty_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Warranty_type $warranty_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Warranty_type $warranty_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Warranty_type $warranty_type)
    {
        //
    }
}
