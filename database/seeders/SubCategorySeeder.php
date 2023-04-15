<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::insert([
            [
                'sub_cat_name' => 'Apple',
                'category_id' => rand(1, 2),
                'status' => 1,
            ],
            [
                'sub_cat_name' => 'Samsung',
                'category_id' => rand(1, 2),
                'status' => 1,
            ],
            [
                'sub_cat_name' => 'Lenovo',
                'category_id' => rand(1, 2),
                'status' => 1,
            ],
            [
                'sub_cat_name' => 'Asus',
                'category_id' => rand(1, 2),
                'status' => 1,
            ]
        ]);
    }
}
