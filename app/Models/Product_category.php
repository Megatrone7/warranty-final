<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_category extends Model
{
    public static function get_catgory()
    {
        return Product_category::all(); 
        
    }
    protected $fillable = [
        'title',
        
    ];
}
