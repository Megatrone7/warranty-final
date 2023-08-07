<?php

namespace App\Models;
use App\Http\Controllers\WarrantyController;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;



class Warranty extends Model
{
    protected $fillable = [
        'title',
        'type',
        'length',
        'serial_number',
        'status',
        'expire_time',
        'product_category'  
    
    ];

     //Warranty::('files')->latest('upload_time')->first();

     public static function getLastWarranty($query) {
        $last = Warranty::orderBy('id', 'desc')->first();      
    $lastt= $last->serial_number;
        $count= $query['count'];
        $product = new Product();
        $x = $product->where([
            ['warranty_serial', '=', null],
        ])->get();
        $a= count($x);
        //  if($count<=$a) {
           for($i=$lastt+1;$i<=$lastt+$count;$i++) {
             $query['serial_number'] = $i; 
              $product_cat=$query['product_category'];
            //   Product::where('id_category', $product_cat)->where('warranty_serial', null)->first()
            //  ->update(['warranty_serial' => $i]); 
                     if($query['type']=1) 
                     {
                        $data=Carbon::now()->addMonth(3);
                         $query['expire_time']=$data;
                            }
                       if($query['type']=2)
                {
                $data=Carbon::now()->addMonth($query['length']);
                $query['expire_time']=$data;

            }

            Warranty::create($query);
           }    
        //  else(dd('no'));   
        

         
      

        // foreach ($x as $x2) {
        //     echo $x2->id;
        // }
     }
    
     public static function get_warranties()
     {
        $count = Warranty::all();
       return count($count);
     }
     public function getproductcategoryAttribute($value){
        $name = Product_category::find($value);
        $name = $name -> title;
        return $name;

    }
     public static function get_persent()
     {
        $all=Warranty::all();
        $b=0;
        $count =count(Warranty::all());
        foreach($all as $alll)
        {
            if($alll['status']==1)
            {
                $b++;
            }


        }
        $darsad=$b*100/$count;
       $darsad = round($darsad);
       $array = ['darsad'=>$darsad,'tedadkol'=>$count,'garanti'=>$b];
        return $array;
        
        
     }
}