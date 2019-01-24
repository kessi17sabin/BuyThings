<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS=0');
      DB::table('products')->truncate();

      $faker=Factory::create();
      $product=[];
      for($i=1;$i<=8;$i++)
      {
      $product[] = [
          'user_id' => '1' ,
          'category_id' => rand(1,3),
          'product_name' => $faker->word ,
          'product_desc' => $faker->sentence(10) ,
          'price' => rand(500,5000) ,
          'product_brand' => $faker->word ,
          'image' => 'laptop'. rand(2,3) . '.' . 'jpg',
        ];
      }
      DB::table('products')->insert($product);
}
}
