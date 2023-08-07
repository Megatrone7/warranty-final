<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product_category;

use App\Exceptions\InvalidOrderException;
use Exception;
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
         Product::create($query);
         $product_category = $query['id_category'];
        
            $warranty = Warranty::where('product_category',$product_category)->where('status',0)->first();
            Warranty::where('product_category',$product_category)->where('status',0)->first()->update(['status'=>1]);
            $warranty = $warranty->serial_number;
            Product::where('id_category',$product_category)->where('warranty_serial',null)->first()->update(['warranty_serial'=>$warranty]);  

            
       
       
    
}

    public function getidcategoryAttribute($value){
        $name = Product_category::find($value);
        $name = $name -> title;
        return $name;

    }
    public static function get_product()
    {
        $product=Product::all();
        $product=count($product);
        return $product;
    }
    

    public function getowneridforshowAttribute(){
        $name = user::find($this->attributes['owner_id']);
        $name = $name -> name;
        return $name;

    }
}
