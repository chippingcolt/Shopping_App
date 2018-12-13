<?php
declare(strict_types=1);
namespace App\Interfaces;
interface ReviewInterface
{
	public function getReviews();
	public function createReview($data);
}