<?php
use Illuminate\Database\Seeder;
class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('reviews')->insert([
			'id' => 1,
			'user_id' => 2,
			'product_id' => 1,
			'review' => 'I wish the description described what kind of water bottle this was, because I drove out there to find out this is literally a used arrowhead bottle...',
		]);
        DB::table('reviews')->insert([
			'id' => 2,
			'user_id' => 3,
			'product_id' => 1,
			'review' => 'I do not know why the guy above me is complaining, it is a water bottle',
		]);
    }
}