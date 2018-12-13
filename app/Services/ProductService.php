<?php
namespace App\Services;
use App\Product;
use App\Interfaces\ProductInterface;
class ProductService implements ProductInterface
{
	public function getAllProducts()
	{
		return Product::all()->toArray();
	}
	public function showProductAndReviews($id)
	{
		//one to many relationship
		return Product::whereIn('id', [$id])->with('reviews')->first()->toArray();
	}
	public function createProduct($data)
	{
		$product = new Product;
		$product->user_id=$data['user_id'];
		$product->name=$data['name'];
		$product->description=$data['description'];
		$product->save();
		return ['message'=>'success'];
	}
}