<?php

namespace App\Models;

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
}
