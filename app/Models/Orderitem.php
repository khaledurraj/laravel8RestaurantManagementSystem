<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    protected $fillable = [
        'foodname',
        'quentity',
        'price',
        'name',
        'phone',
        'address',
    ];
}
