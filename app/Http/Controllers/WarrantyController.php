<?php

namespace App\Http\Controllers;

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
        $Warranty = Warranty::all();
if(Auth::user()->role==1) {
    return view('panel.cities.list', compact('Warranty'));
}
else
{
    
    $id=Auth::user()->id;
    
    $warranti=Warranty::where('owner_id', $id)->get(); 

    return view('panel.cities.list2', compact('warranti'));
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
        return view('panel.cities.create',compact('category','type','user'));
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
    //  $text='حلال اوسون';
    //  return redirect(route('dashboard'))->withSuccess($text);
    //   $query=[
    //     'title'=>$title,
    //     'type'=>$type,
    //     'length'=>$length,
    //     'status'=>$status,
    //     'expire_time'=>$expire_time,
    //     'product_id'=>$product_id



    //   ];
    //   $warranty_created = Warranty::create($query);

     // $txt = 'پیام شما با موفقیت ثبت شد';
     // return redirect(route('warranty.index'))->withSuccess($txt);
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
        $user = Warranty::find($id);
        $bah=$user->serial_number;
        Product::where('warranty_serial', $bah)->update(['warranty_serial' => null]); 
       
        $user->delete();

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

        $war='وجود ندارد';

        return view('welcome',compact('war'));
       }
       else
       {

    return view('welcome', compact('warranty'));
}
    }


}
