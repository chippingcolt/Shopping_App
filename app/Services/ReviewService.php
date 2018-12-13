<?php
namespace App\Services;
use App\Review;
use App\Interfaces\ReviewInterface;
class ReviewService implements ReviewInterface
{
	public function getReviews()
	{
		return Review::all()->toArray();
	}
	public function createReview($data)
	{
		$review = new Review;
		$review->user_id=$data['user_id'];
		$review->product_id=$data['product_id'];
		$review->review=$data['review'];
		$review->save();
		return ['message'=>'success'];
	}
}