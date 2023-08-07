<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_category extends Model
{
    public static function get_catgory()
    {
        $catogry=Product_category::all();
        return $catogry;
        
    }
    protected $fillable = [
        'title',
        
    ];
}
