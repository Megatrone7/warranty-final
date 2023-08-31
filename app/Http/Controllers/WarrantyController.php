<?php

namespace App\Http\Controllers;

use App\Models\details;
use App\Models\Product;
use App\Models\Product_category;
use App\Models\User;
use App\Models\Warranty;
use App\Models\Warranty_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class WarrantyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Warranty = Warranty::where('is_deleted', null)->get();
if(Auth::user()->role==1) {
    return view('panel.cities.list', compact('Warranty'));
}
else
{

    $id=Auth::user()->id;

    $Warranty=Warranty::where('owner_id', $id)->get();

    return view('panel.cities.list', compact('Warranty'));
}

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category= Product_category::all();
        $type=Warranty_type::all();
        $user=User::all();
        $details=details::all();
        return view('panel.cities.create',compact('category','type','user','details'));
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
      'details'=>$request->details,
     'status' =>0,
      'count' =>  $request->count,
      'name'=> $request->name,
      'expire_time' => $request->expire_time,
      'product_category'=>$request->product_category,
      'owner_id'=>$request->owner_id,
        ];
    $last = Warranty::getLastWarranty();
    Warranty::CalculationWarranty($query,$last);
    return redirect(route('warranty.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {

        $query=[
            'id' => $request->id
        ];
        $id=$query['id'];
        $warranty=Warranty::find($id);
        return view('welcome',compact('warranty'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $warranty=Warranty::find($id);

        return view('panel.cities.edit',compact('warranty'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $warranty=Warranty::find($id);
        $warranty->update($request->all());
        

        return view('panel.cities.edit',compact('warranty'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $warranty = Warranty::find($id);
        $serial=$warranty->serial_number;

        Product::where('warranty_serial', $serial)->update(['warranty_serial' => null]);

        $warranty->update(['is_deleted' => 1]);

        return redirect()->route('warranty.index');
    }

    public function welcome(Request $request)
    {
        $query=[
            'id' => $request->id
        ];
        $id=$query['id'];
       $warranty= Warranty::where('serial_number', $id)->first();
       if ($warranty==null) {

        $noexits='وجود ندارد';

        return view('welcome',compact('noexits'));
       }
       else
       {

    return view('welcome', compact('warranty'));
}
    }


}
