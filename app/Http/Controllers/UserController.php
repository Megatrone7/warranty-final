<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::all();
        
       return view('panel.admins.list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $query=
        [
   'name' => $request->name,
  'family' =>$request->family,
  'email' => $request->email,
 'mobile' =>$request->mobile,
  'role' =>  $request->role,
  'password' => Hash::make($request->password),

    ];
    User::create($query);   
    $txt = 'پیام شما با موفقیت ثبت شد';
    return redirect(route('admins.index'))->withSuccess('salam');
    }


    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
       //
        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user=User::find($id);
      
        return view('panel.admins.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->update($request->all());
      
        return view('panel.admins.edit',compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        // Product::where(
        //     ['owner_id', '=', $id])->update(['owner_id' => null]);
        Product::where('owner_id', $id)->update(['owner_id' => null]); 
        $user->delete();

        return redirect()->route('admins.index');
    }
}
