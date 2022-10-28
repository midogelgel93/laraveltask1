<?php

namespace App\Models;
use App\Models\Category;
use App\Models\Order;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    // protected $with =['orders'];
    use HasFactory;
    // protected $table ='all_products';
    protected $fillable =['name','price','amount'];
    public $timestamps =false;

    function category (){
        return $this->belongsTo(Category::class);
    }

    function orders (){
        return $this->belongsToMany(Order::class);
    }
}
