<?php

namespace App\Models;
use App\Http\Controllers\WarrantyController;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Printable;

use Carbon\Carbon;

use function PHPUnit\Framework\isNull;

class Warranty extends Model
{
    protected $fillable = [
        'title',
        'type',
        'length',
        'serial_number',
        'status',
        'expire_time',
        'product_category',
        'owner_id',
        'is_archive',
        'is_deleted',
        'active_date',
        'details'

    ];


     public static function getLastWarranty()
     {
        $last = Warranty::orderBy('id', 'desc')->first();
        if ($last==null) {
            $last= 0;
        }
        if($last!==0) {
            $last= $last->serial_number;
            $last = preg_replace("/[^0-9]/", '', $last);
            $last = (int)$last;
        }

        return $last;
     }


     public static function CalculationWarranty($query,$last)
     {

        if($last >= 10000){
            $last = $last %10000;

        }
        $count= $query['count'];
        for($i=$last+1;$i<=$last+$count;$i++) {
          $query['serial_number'] = $query['name'].$i.random_int(1,99);

          self:: CreateWarranty($query);


        }

     }




//      public static function CalculationExpiretime($query)
//      {

//         if($query['type']==1)
//         {
//            $data=Carbon::now()->setTime(0, 0)->addMonth(3);
//             $query['expire_time']=$data;
//                }
//           if($query['type']==2)
//    {
//    $data=Carbon::now()->setTime(0, 0)->addMonth($query['length']);
//    $query['expire_time']=$data;
//    self::CreateWarranty($query);
// }
//      }

     public static function CreateWarranty($query)
     {
       // self::CalculationExpiretime($query);
        Warranty::create($query);

     }
     public static function get_warranties()
     {
        $count = Warranty::all();
       return count($count);
     }
     public function getproductcategoryforshowAttribute(){
       
        return ($this -> attributes['product_category'] !== null) ?  Product_category::find($this->attributes['product_category'])-> title :'دسته بندی حذف شده' ;

    }
    public function getowneridforshowAttribute(){

        return ($this -> attributes['owner_id'] !== null) ?  user::find($this->attributes['owner_id'])-> name :'کاربر حذف شده' ;
       
    }
    public function gettypeAttributeforshow(){
        
        if ($this->attributes['type']==null) {
            return ' پاک شده';
        }
        $name = Warranty_type::find($this->attributes['type']);      
            $name = $name -> type;
            return $name;
    }
     public static function get_persent()
     {
        $all=Warranty::all();
        $waranty=0;
        $count =count(Warranty::all());
if($count !== 0) {
    foreach($all as $active) {
        if($active['status'] == 1) {
            $waranty++;
        }


    }
    $darsad = $waranty * 100 / $count;
    $darsad = round($darsad);

    $array = ['darsad' => $darsad, 'tedadkol' => $count, 'garanti' => $waranty];
    return $array;
}
else{
     $array = ['darsad' => 0, 'tedadkol' => 0, 'garanti' => 0];
    return $array;
    

}
     }
}
