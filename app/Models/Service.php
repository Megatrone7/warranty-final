<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'owner_id',
        'product_id',
        'description',
        'Date_of_referral_for_repair',
        'The_date_of_leaving_the_repair_shop',
    ];
    public static function get_create($query)
    {
        $time=Carbon::now();
        $query['Date_of_referral_for_repair']=$time;
        Service::create($query);
    }
    public function getowneridforshowAttribute(){
        return ($this -> attributes['owner_id'] !== null) ?  user::find($this->attributes['owner_id'])-> name :'کاربر وجود ندارد' ;
    }
}
