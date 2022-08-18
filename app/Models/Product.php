<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'products';
    protected $fillable = ['name', 'image', 'price', 'description', 'category_id'];
    public $timestamps = false;

    public function category(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }
}
