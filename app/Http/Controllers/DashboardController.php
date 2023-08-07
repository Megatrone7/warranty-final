<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Warranty;
use App\Models\User;
use PhpParser\Node\Stmt\Foreach_;

class DashboardController extends Controller
{
    public function index()
    {
        //addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);
        $warranties = Warranty::get_persent();
        $contact = User::where('role', 1)
        ->take(4)
        ->get();
        // $haha=[];

        // $contact=User::all();
        // Foreach($contact as $contacts)
        // {
        //    if ($contacts['role']==4)
        //    {
        //    array_push($haha,$contacts);


        //    }    


        // }
        $count=User::get_contact();
         $product=Product::get_product();

       return view('panel.other.dashboard',compact('warranties','contact','count','product'));
    }
}
