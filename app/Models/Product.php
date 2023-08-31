<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product_category;

use App\Exceptions\InvalidOrderException;
use Exception;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'id_category',
        'warranty_serial',
        'owner_id',
        'sale_date',
        'product_serial'
    ];
    
    public static function get_create($query)
    {

        
            $product_category = $query['id_category'];
        
            $warranty = Warranty::where('product_category',$product_category)->where('status',0)->where('owner_id',Auth::user()->id)->first();

            if($warranty == null){
                //dd('hich garranty baraye shoma vojood nadarad');
                return redirect('/product/create')->with('alert','sabt nashod');
            }

            if ($warranty !== null) {
                Product::create($query);
            }
          

            Warranty::where('product_category',$product_category)->where('status',0)->where('owner_id',Auth::user()->id)->first()->update(['status'=>1]);

            $warranty = $warranty->serial_number;

            Product::where('id_category',$product_category)->where('warranty_serial',null)->first()->update(['warranty_serial'=>$warranty]);  
       
    
}

    public function getidcategoryAttribute($value){
        $name =  Product_category::find($value);
        return (isNull($name)) ?  $name = $name -> title :'دسته بندی حذف شده' ;

    }
    public static function get_product()
    {
        $product=Product::all();
        $product=count($product);
        return $product;
    }
    

    public function getowneridforshowAttribute(){

        return ($this -> attributes['owner_id'] !== null) ?  user::find($this->attributes['owner_id'])-> name :'دسته بندی حذف شده' ;


        // if ($this -> attributes['owner_id'] == null  ){
        //     echo($this -> attributes['owner_id']);
       
        // }
        // else {
        //   $user = user::find($this->attributes['owner_id']);
        //   return $user->name;
        // }

      
        

    }
}
