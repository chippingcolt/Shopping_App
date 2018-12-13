<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Review extends Model
{
    /*
    *
    *
    * @var Array
    */
    protected $fillable = [
    	'product_ID', 'seller_ID', 'review',
    ];
    public function products()
    {
        return $this->belongsTo('App\Product');
    }
}