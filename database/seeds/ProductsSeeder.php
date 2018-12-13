<?php
use Illuminate\Database\Seeder;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
			'id' => 1,
			'user_ID' => 1,
			'name' => 'water bottle',
			'description' => 'Do i really need to describe what a water bottle is? $10',
		]);
        DB::table('products')->insert([
			'id' => 2,
			'user_ID' => 2,
			'name' => 'water',
			'description' => 'Because how else will you fill your bottle. $10 OBO',
		]);
    }
}