<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable =['product_id','product_qty','total_price','status_checkout','created_at','updated_at'];
    public function product(){
        return $this -> BelongsTo ('App\Models\Product');
    }
}
