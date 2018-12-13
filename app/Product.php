<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    //
    protected $fillable = [
    	'user_id', 'name', 'description',
    ];
    public function reviews()
    {
        return $this->hasMany('App\Review', 'product_id', 'id');
    }
}