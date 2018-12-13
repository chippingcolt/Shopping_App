<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Interfaces\ProductInterface;
class ProductsController extends Controller
{
    //
    protected $productTool;
    public function __construct(ProductInterface $productTool)
    {
    	$this->productTool = $productTool;
    }
    public function getAllProducts()
    {
    	return $this->productTool->getAllProducts();
    }
    public function showProductAndReviews($id)
    {
    	return $this->productTool->showProductAndReviews($id);
    }
    public function createProduct(Request $request)
    {
    	$data = [ 
    		'user_id'=>$request->user_id, 
    		'name'=>$request->name, 
    		'description'=>$request->description
    	];
    	// dd($data);
    	return $this->productTool->createProduct($data);
    }
}