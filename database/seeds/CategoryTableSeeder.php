<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
          [
            'category_name' => 'Mobiles' ,
            'category_types' => 'Electrical Gadgets'
          ],
          [
            'category_name' => 'Laptops' ,
            'category_types' => 'Electrical Gadgets'
          ],
          [
            'category_name' => 'Televisions' ,
            'category_types' => 'Electrical Gadgets'
          ]
        ]);
    }
}
