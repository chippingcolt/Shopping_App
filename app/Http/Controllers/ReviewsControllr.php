<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Interfaces\ReviewInterface;
class ReviewsController extends Controller
{
    //
	protected $reviewTool;
    public function __construct(ReviewInterface $reviewTool)
    {
    	$this->reviewTool = $reviewTool;
    }
    public function getReviews() {
		return $this->reviewTool->getReviews();
    }
    public function createReview(Request $request)
    {
    	$data = [ 
    		'user_id'=>$request->user_id, 
    		'product_id'=>$request->product_id, 
    		'review'=>$request->review
    	];
    	// dd($data);
    	return $this->reviewTool->createReview($data);
    }
}