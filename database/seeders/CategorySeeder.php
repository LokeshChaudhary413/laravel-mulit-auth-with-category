<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'cat_name' => 'Mobile',
                'status' => 1,
            ],
            [
                'cat_name' => 'Laptop',
                'status' => 1,
            ]
        ]);
    }
}
