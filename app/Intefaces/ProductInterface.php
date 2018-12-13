<?php
declare(strict_types=1);
namespace App\Interfaces;
interface ProductInterface
{
	public function getAllProducts();
	public function showProductAndReviews($id);
	public function createProduct($data);
}