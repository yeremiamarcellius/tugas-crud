<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable= ['productname', 'description', 'price', 'stock', 'expireddate'];
}
