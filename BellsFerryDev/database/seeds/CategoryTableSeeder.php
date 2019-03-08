<?php

use App\Category;
use Carbon\Carbon;
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
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Indoor Products', 'slug' => 'indoor-products', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Outdoor Products', 'slug' => 'outdoor-products', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Accessories', 'slug' => 'accessories', 'created_at' => $now, 'updated_at' => $now]
        ]);
    }
}
