<?php

namespace App\Models;
use App\Models\Order;
use App\Models\Product;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    protected $table = 'order_product';
    protected $fillable = ['order_id','product_id','price','amount'];

    function order_id (){
        return $this->belongsToMany(Order::class);
    }
    function product_id (){
        return $this->belongsToMany(Product::class);
    }

}
