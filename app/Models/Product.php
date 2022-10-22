<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $table ='all_products';
    protected $fillable =['name','price','amount'];
    public $timestamps =false;
}
