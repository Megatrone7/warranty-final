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
    
         $contact=User::all();
        $count=User::get_contact();
         $product=Product::get_product();
         $warrantiess=Warranty::all();

       return view('panel.other.dashboard',compact('warranties','warrantiess','contact','count','product'));
    }
}
